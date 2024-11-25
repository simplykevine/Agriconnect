<?php
$host = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'food-order';
$port = 3307;

$conn = mysqli_connect($host, $username, $password, $dbname, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Database connected successfully!";
?>
