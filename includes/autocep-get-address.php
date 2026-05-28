<?php
function autocep_get_address() {
    // Sanitização e validação do nonce
    if (!isset($_POST['nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['nonce'])), 'autocep_nonce')) {
        error_log('Nonce inválida ou ausente');
        wp_send_json_error('Nonce inválida ou ausente');
    }

    // Verificação se o CEP foi informado
    if (!isset($_POST['cep'])) {
        error_log('CEP não informado');
        wp_send_json_error('CEP não informado');
    }

    // Sanitização e validação do CEP
    $cep = sanitize_text_field(wp_unslash($_POST['cep']));
    if (!preg_match('/^[0-9]{8}$/', $cep)) {
        error_log('CEP inválido: ' . $cep);
        wp_send_json_error('CEP inválido');
    }

    error_log('Buscando endereço para o CEP: ' . $cep);

    $is_success = false;
    $data = null;
    $final_error = null;

    // 1. Tenta buscar na API ViaCEP (Principal)
    $response = wp_remote_get("https://viacep.com.br/ws/{$cep}/json/", array(
        'timeout' => 10 // Limite de 10s para não atrasar a resposta em caso de fora do ar
    ));

    if (!is_wp_error($response) && wp_remote_retrieve_response_code($response) === 200) {
        include_once(plugin_dir_path(__FILE__) . 'autocep-remote-get.php');
        $data = autocep_remote_get($response);
        
        if ($data && !isset($data['erro'])) {
            $is_success = true;
        }
    } else {
        $final_error = $response;
    }

    // 2. Se falhar ou estiver indisponível, tenta a API OpenCEP (Fallback)
    if (!$is_success) {
        error_log('ViaCEP indisponível ou falhou para o CEP: ' . $cep . '. Tentando fallback com OpenCEP...');
        
        $response_fallback = wp_remote_get("https://opencep.com/v1/{$cep}.json", array(
            'timeout' => 10
        ));

        if (!is_wp_error($response_fallback) && wp_remote_retrieve_response_code($response_fallback) === 200) {
            include_once(plugin_dir_path(__FILE__) . 'autocep-remote-get.php');
            $data = autocep_remote_get($response_fallback);
            
            if ($data && !isset($data['erro'])) {
                $is_success = true;
            }
        } else {
            // Caso ambos falhem por erro de rede, armazena o último erro
            $final_error = is_wp_error($response_fallback) ? $response_fallback : $response;
        }
    }

    // Se ambos os serviços de rede/servidor falharem (sem retorno válido)
    if (!$is_success && !$data) {
        $error_to_send = is_wp_error($final_error) ? $final_error : new WP_Error('api_error', 'Ambos os serviços de CEP estão indisponíveis.');
        include_once(plugin_dir_path(__FILE__) . 'autocep-json-error.php');
        autocep_json_error($error_to_send);
    }

    // Se um dos serviços respondeu, mas indicando que o CEP não existe
    if (isset($data['erro']) && $data['erro'] === true) {
        error_log('CEP não encontrado em nenhum dos serviços: ' . $cep);
        wp_send_json_error('CEP não encontrado');
    }

    include_once(plugin_dir_path(__FILE__) . 'autocep-result.php');
    autocep_send_result($data, $cep);
}
?>
