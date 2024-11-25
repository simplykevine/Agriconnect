<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food-order";
$port = 3307; // Make sure you're using the correct port

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>