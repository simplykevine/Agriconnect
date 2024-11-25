<?php
include('../config/constants.php'); 

// Fetch all admin data
$sql = "SELECT * FROM tbl_admin";
$res = mysqli_query($conn, $sql);

if ($res) {
    while ($row = mysqli_fetch_assoc($res)) {
        $id = $row['id'];
        $current_password = $row['password'];

        // Rehash only plain-text passwords (basic check)
        if (strlen($current_password) !== 60) { // BCrypt hashed passwords are 60 characters
            $new_hashed_password = password_hash($current_password, PASSWORD_DEFAULT);

            // Update the database with the new hashed password
            $update_sql = "UPDATE tbl_admin SET password='$new_hashed_password' WHERE id='$id'";
            mysqli_query($conn, $update_sql);
        }
    }
    echo "Passwords have been updated successfully.";
} else {
    echo "Failed to fetch admin data.";
}
?>