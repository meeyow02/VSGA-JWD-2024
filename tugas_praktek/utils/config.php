<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'moto09';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die('Koneksi Gagal: ' . mysqli_connect_error());
}
