<?php 
include('partials/menu.php'); 
include('../config/test_connection.php'); // Ensure this path is correct and includes the database connection
// include('../config/session.php');
// Start the session
?>

<!-- Main Content Section Starts -->
<div class="main-content">
    <div class="wrapper">
        <h1>Dashboard</h1>
        <br><br>
        <?php 
            if(isset($_SESSION['login'])) {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
        ?>
        <br><br>

        <div class="col-4 text-center">
            <?php 
                // SQL Query 
                $sql = "SELECT COUNT(*) AS count FROM tbl_category";
                // Execute Query
                $res = mysqli_query($conn, $sql);
                // Check for query errors
                if (!$res) {
                    echo "<div class='error'>Error: " . mysqli_error($conn) . "</div>";
                }
                // Get count
                $row = mysqli_fetch_assoc($res);
                $count = $row['count'];
            ?>

            <h1><?php echo $count; ?></h1>
            <br />
            Categories
        </div>

        <div class="col-4 text-center">
            <?php 
                // SQL Query 
                $sql2 = "SELECT COUNT(*) AS count FROM tbl_food";
                // Execute Query
                $res2 = mysqli_query($conn, $sql2);
                // Check for query errors
                if (!$res2) {
                    echo "<div class='error'>Error: " . mysqli_error($conn) . "</div>";
                }
                // Get count
                $row2 = mysqli_fetch_assoc($res2);
                $count2 = $row2['count'];
            ?>

            <h1><?php echo $count2; ?></h1>
            <br />
            Foods
        </div>

        <div class="col-4 text-center">
            <?php 
                // SQL Query 
                $sql3 = "SELECT COUNT(*) AS count FROM tbl_order";
                // Execute Query
                $res3 = mysqli_query($conn, $sql3);
                // Check for query errors
                if (!$res3) {
                    echo "<div class='error'>Error: " . mysqli_error($conn) . "</div>";
                }
                // Get count
                $row3 = mysqli_fetch_assoc($res3);
                $count3 = $row3['count'];
            ?>

            <h1><?php echo $count3; ?></h1>
            <br />
            Total Orders
        </div>

        <div class="col-4 text-center">
            <?php 
                // Create SQL Query to Get Total Revenue Generated
                $sql4 = "SELECT SUM(total) AS Total FROM tbl_order WHERE status='Delivered'";
                // Execute the Query
                $res4 = mysqli_query($conn, $sql4);
                // Check for query errors
                if (!$res4) {
                    echo "<div class='error'>Error: " . mysqli_error($conn) . "</div>";
                }
                // Get the value
                $row4 = mysqli_fetch_assoc($res4);
                // Get the total revenue
                $total_revenue = $row4['Total'];
            ?>

            <h1>$<?php echo number_format($total_revenue, 2); ?></h1>
            <br />
            Revenue Generated
        </div>

        <div class="clearfix"></div>

    </div>
</div>
<!-- Main Content Section Ends -->

<?php include('partials/footer.php'); ?>