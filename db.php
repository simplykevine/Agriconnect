<?php
// Start Session if needed across files
// session_start();

// Define Constants
define('SITEURL', 'http://localhost/food-order/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');  // Default username for XAMPP
define('DB_PASSWORD', '');      // Leave blank if no password is set for XAMPP
define('DB_NAME', 'food-order'); // Ensure this is the exact name of your database

// Create Database Connection
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME, 3307);

// Check Connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection to database was successful!";
}