<?php
$servername = "localhost";
$username   = "root";
$password   = "01219639408t";
$database   = "php_DB";
$port       = 3306;

$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
