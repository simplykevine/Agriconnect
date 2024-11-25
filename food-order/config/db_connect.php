<?php
$servername = "localhost"; // Use 'localhost' without port number
$username = "root";        // Default username for XAMPP
$password = "";            // Leave empty if no password is set for root
$dbname = "food-order";    // Replace with your actual database name
$port = 3307;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully"; // Optional confirmation message