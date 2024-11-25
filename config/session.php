<?php
// config/session.php
if (session_status() === PHP_SESSION_NONE) {
    echo "Starting session...";
    session_start();
} else {
    echo "Session already started.";
}
