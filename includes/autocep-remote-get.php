<?php
if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('autocep_remote_get')) {
    function autocep_remote_get($response) {
        $body = wp_remote_retrieve_body($response);
        return json_decode($body, true);
    }
}
?>
