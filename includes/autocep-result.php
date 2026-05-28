<?php
if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('autocep_send_result')) {
    function autocep_send_result($data, $cep) {
        $result = array(
            'cep' => $cep,
            'logradouro' => $data['logradouro'] ?? '',
            'bairro' => $data['bairro'] ?? '',
            'localidade' => $data['localidade'] ?? '',
            'uf' => $data['uf'] ?? '',
        );

        wp_send_json_success($result);
    }
}
?>
