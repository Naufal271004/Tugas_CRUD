<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "universitas";

$koneksi = mysqli_connect($host,$user,$password,$db);

if (!$koneksi) {
    die("Gagal Terhubung Dengan Database");
}
?>