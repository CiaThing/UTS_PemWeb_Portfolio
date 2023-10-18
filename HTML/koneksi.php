<?php
$serverName = "sql208.infinityfree.com";
$userName = "if0_35251574";
$password = "rJMrymqRwUlvLr";
$dbName = "if0_35251574_uts_pemweb";


//buat koneksi
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

//cek koneksi
if (!$conn) {
    die("Koneksi gagal");
}
?>