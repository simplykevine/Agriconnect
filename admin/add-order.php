<?php
include('partials/menu.php');
include('../config/constants.php');

// Process form submission
if (isset($_POST['submit'])) {
    // Get form data
    $order_date = $_POST['order_date'];
    $customer_name = $_POST['customer_name'];
    $customer_contact = $_POST['customer_contact'];
    $customer_email = $_POST['customer_email'];
    $customer_address = $_POST['customer_address'];
    $food = $_POST['food'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $total = $_POST['total'];

    // SQL query to insert data
    $sql = "INSERT INTO tbl_order (order_date, customer_name, customer_contact, customer_email, customer_address, food, price, qty, total) 
            VALUES ('$order_date', '$customer_name', '$customer_contact', '$customer_email', '$customer_address', '$food', '$price', '$qty', '$total')";

    // Execute the query
    $res = mysqli_query($conn, $sql);

    if ($res) {
        $_SESSION['add'] = "<div class='success'>Order Added Successfully.</div>";
        header('Location: manage-order.php'); // Redirect to manage orders page
        exit(); // Make sure to exit after redirect
    } else {
        $_SESSION['add'] = "<div class='error'>Failed to Add Order.</div>";
    }
}
?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Order</h1>

        <br /><br />

        <form action="add-order.php" method="POST">
            <table class="tbl_order">
                <!-- Form fields -->
                <tr>
                    <td>Order Date</td>
                    <td><input type="datetime-local" name="order_date" required></td>
                </tr>
                <tr>
                    <td>Customer Name</td>
                    <td><input type="text" name="customer_name" required></td>
                </tr>
                <tr>
                    <td>Customer Contact</td>
                    <td><input type="text" name="customer_contact" required></td>
                </tr>
                <tr>
                    <td>Customer Email</td>
                    <td><input type="email" name="customer_email" required></td>
                </tr>
                <tr>
                    <td>Customer Address</td>
                    <td><input type="text" name="customer_address" required></td>
                </tr>
                <tr>
                    <td>Food</td>
                    <td><input type="text" name="food" required></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type="number" name="price" step="0.01" required></td>
                </tr>
                <tr>
                    <td>Quantity</td>
                    <td><input type="number" name="qty" required></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="number" name="total" step="0.01" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Order" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include('partials/footer.php'); ?>