<?php
// Start Session
if (!isset($_SESSION)) {
    session_start();
}

// Create Constants to Store Non-Repeating Values
define('SITEURL', 'http://localhost/food-order/');
define('LOCALHOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'food-order'); 
define('DB_PORT', 3307);  // Add this line for the custom port

// Database Connection
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);  // Use DB_PORT here

// Check Connection
if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

// Selecting Database
$db_select = mysqli_select_db($conn, DB_NAME);
if (!$db_select) {
    die("Database Selection Failed: " . mysqli_error($conn));
}
?>