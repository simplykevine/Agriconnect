<?php
include('config/constants.php');

if ($conn) {
    echo "Database connection successful!";
} else {
    echo "Database connection failed.";
}
?>
