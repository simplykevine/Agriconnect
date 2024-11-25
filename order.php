<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
    include('partials-front/menu.php'); 
    include('./config/test_connection.php'); // Include database connection file
    ?>

    <!-- Order Processing -->
    <?php
        if(isset($_POST['submit'])) {
            // Get form data
            $food = $_POST['food'];
            $price = $_POST['price'];
            $qty = $_POST['qty'];
            $total = $price * $qty; // Total = price * qty
            $order_date = date("Y-m-d H:i:s"); // Order date
            $status = "Ordered"; // Ordered, On Delivery, Delivered, Cancelled
            $customer_name = $_POST['full-name'];
            $customer_contact = $_POST['contact'];
            $customer_email = $_POST['email'];
            $customer_address = $_POST['address'];

            // Insert into database
            $sql = "INSERT INTO tbi_order (food, price, qty, total, order_date, status, customer_name, customer_contact, customer_email, customer_address) 
                    VALUES ('$food', $price, $qty, $total, '$order_date', '$status', '$customer_name', '$customer_contact', '$customer_email', '$customer_address')";

            $res = mysqli_query($conn, $sql);

            if($res) {
                // Order inserted successfully
                $_SESSION['order'] = "<div class='success text-center'>Order Placed Successfully.</div>";
                // Notify admin (this could be an email or a database entry that the admin can check)
                $admin_message = "New order placed by $customer_name. Contact: $customer_contact";
                mail("admin@example.com", "New Order Notification", $admin_message);

                // Redirect to home page
                header("location:".SITEURL);
                exit(); // Make sure to exit after header redirect
            } else {
                // Failed to insert order
                $_SESSION['order'] = "<div class='error text-center'>Failed to Place Order.</div>";
                header("location:".SITEURL.'order.php');
                exit(); // Make sure to exit after header redirect
            }
        }
    ?>

    <section class="food-search">
        <div class="container">
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>
            <form action="" method="POST" class="order">
                <fieldset>
                    <legend>Selected Food</legend>
                    <div class="food-menu-img">
                        <img src="images/images.jpg" alt="veggies" class="img-responsive img-curve">
                    </div>
                    <div class="food-menu-desc">
                        <h3>Food Title</h3>
                        <p class="food-price">$2.3</p>
                        <input type="hidden" name="food" value="Food Title">
                        <input type="hidden" name="price" value="2.3">
                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Kevine Keza" class="input-responsive" required>
                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. +2407900000" class="input-responsive" required>
                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. umutonikevine0000@gmail.com" class="input-responsive" required>
                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>
                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>
            </form>
        </div>
    </section>

    <!-- Navigation Menu -->
    <div class="menu text-right">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="categories.php">Categories</a></li>
            <li><a href="foods.php">Foods</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>

    <?php include('partials-front/footer.php'); ?>
</body>
</html>
