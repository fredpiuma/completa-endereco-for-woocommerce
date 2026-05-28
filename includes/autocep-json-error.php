<?php
if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('autocep_json_error')) {
    function autocep_json_error($response) {
        wp_send_json_error('Erro na busca do endereço');
    }
}
?>
