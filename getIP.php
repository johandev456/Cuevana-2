<?php
function obtenerIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        // IP from shared internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // IP passed from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        // IP address from remote address
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    // Handle IPv6 loopback address
    if ($ip == '::1') {
        $ip = '127.0.0.1';
    }

    return $ip;
}
?>