<?php
// Start Session
if (!isset($_SESSION)) {
    session_start();
}

// Create Constants to Store Non Repeating Values
define('SITEURL', 'http://localhost/food-order/');
define('LOCALHOST', 'localhost'); // Change this to 'localhost'
define('DB_USERNAME', 'root'); // Default username for XAMPP
define('DB_PASSWORD', ''); // Leave empty if no password is set for root
define('DB_NAME', 'food-order'); // Replace with your actual local database name

// Database Connection
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME, 3307);
// Selecting Database
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn)); 
