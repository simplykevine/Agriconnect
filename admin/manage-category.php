<?php
include('partials/menu.php');
include('../config/test_connection.php');

// Query to Get all Categories from Database
$sql = "SELECT * FROM tbl_category";  // Ensure this matches the actual table name

// Execute the Query
$res = mysqli_query($conn, $sql);

// Check for query execution errors
if (!$res) {
    die("Error executing query: " . mysqli_error($conn));
}

// Count Rows
$count = mysqli_num_rows($res);
?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Category</h1>

        <br /><br />
        <?php 
            // Display session messages
            $messages = ['add', 'remove', 'delete', 'no-category-found', 'update', 'upload', 'failed-remove'];
            foreach ($messages as $message) {
                if (isset($_SESSION[$message])) {
                    echo $_SESSION[$message];
                    unset($_SESSION[$message]);
                }
            }
        ?>
        <br><br>

        <!-- Button to Add Category -->
        <a href="<?php echo SITEURL; ?>admin/add-category.php" class="btn-primary">Add Category</a>

        <br /><br /><br />

        <table class="tbl-full">
            <tr>
                <th>S.N.</th>
                <th>Title</th>
                <th>Image</th>
                <th>Featured</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>

            <?php 
                if ($count > 0) {
                    $sn = 1;
                    while ($row = mysqli_fetch_assoc($res)) {
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        $featured = $row['featured'];
                        $active = $row['active'];
                        ?>

                        <tr>
                            <td><?php echo $sn++; ?>. </td>
                            <td><?php echo $title; ?></td>
                            <td>
                                <?php  
                                    // Check whether we have image or not
                                    if ($image_name == "") {
                                        echo "<div class='error'>Image not Added.</div>";
                                    } else {
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" width="100px">
                                        <?php
                                    }
                                ?>
                            </td>
                            <td><?php echo $featured; ?></td>
                            <td><?php echo $active; ?></td>
                            <td>
                                <a href="<?php echo SITEURL; ?>admin/update-category.php?id=<?php echo $id; ?>" class="btn-secondary">Update Category</a>
                                <a href="<?php echo SITEURL; ?>admin/delete-category.php?id=<?php echo $id; ?>" class="btn-danger">Delete Category</a>
                            </td>
                        </tr>

                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="6"><div class="error">No Category Added.</div></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </div>
</div>

<?php include('partials/footer.php'); ?>
