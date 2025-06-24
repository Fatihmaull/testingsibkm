<?php
$host = "localhost";
$user = "xbpyirjl_fatih";
$pass = "db_sibkm123";
$database = "xbpyirjl_sibkm";

$conn = mysqli_connect($host, $user, $pass, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>