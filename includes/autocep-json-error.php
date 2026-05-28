<?php
if (!defined('ABSPATH')) {
    exit;
}

function autocep_json_error($response) {
    wp_send_json_error('Erro na busca do endereço');
}
?>
