<?php
if (isset($_COOKIE['customer_name'])) {
    $customerName = $_COOKIE['customer_name'];
} else {
    $customerName = "";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer Visit Tracking</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Customer Visit Tracking</h2>

    <?php
    if ($customerName != "") {
        echo "<p class='welcome'>Welcome back, $customerName!</p>";
    } else {
        echo "<p class='welcome'>Welcome to our website!</p>";
    }
    ?>

    <form action="process.php" method="POST">

        <label>Customer Name</label>
        <input type="text" name="name" required>

        <label>Choose Preference</label>
        <select name="preference" required>
            <option value="">Select Preference</option>
            <option>Books</option>
            <option>Electronics</option>
            <option>Clothing</option>
            <option>Sports</option>
        </select>

        <input type="submit" value="Save Preference">

    </form>

</div>

</body>
</html>