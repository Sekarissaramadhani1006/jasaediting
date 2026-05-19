<?php

if (session_status() == PHP_SESSION_NONE) {

    session_set_cookie_params(0);

    session_start();
}

$conn = oci_connect(
    "system",
    "rissa",
    "localhost:1521/FREE"
);

if (!$conn) {

    $e = oci_error();

    die("Koneksi gagal: " . $e['message']);
}
