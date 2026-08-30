<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    $username = "";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Online Shopping</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Online Shopping</h2>

    <form action="process.php" method="POST">

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Select Product</label>
        <select name="product" required>
            <option value="">Choose Product</option>
            <option>Headphones</option>
            <option>Smart Watch</option>
            <option>Backpack</option>
            <option>Notebook</option>
        </select>

        <label>Action</label>
        <select name="action">
            <option>Add to Cart</option>
            <option>Browse Product</option>
        </select>

        <input type="submit" value="Continue Shopping">

    </form>

</div>

</body>
</html>