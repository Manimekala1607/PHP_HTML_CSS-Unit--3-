<?php

session_start();

$username = trim($_POST['username']);
$product = $_POST['product'];
$action = $_POST['action'];

/* Store username in session */
$_SESSION['username'] = $username;

/* Create cart if not available */
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

/* Create browsing history if not available */
if (!isset($_SESSION['history'])) {
    $_SESSION['history'] = [];
}

/* Add product to cart */
if ($action == "Add to Cart") {
    $_SESSION['cart'][] = $product;
}

/* Add product to browsing history */
$_SESSION['history'][] = $product;

/* Store username using cookie */
setcookie(
    "shopping_user",
    $username,
    time() + (86400 * 30)
);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Details</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Shopping Details</h2>

    <p class="success">
        Welcome, <?php echo htmlspecialchars($username); ?>!
    </p>

    <div class="details">

        <p>
            <strong>Current Product:</strong>
            <?php echo htmlspecialchars($product); ?>
        </p>

        <p>
            <strong>Action:</strong>
            <?php echo htmlspecialchars($action); ?>
        </p>

        <p>
            <strong>Shopping Cart:</strong>
            <?php
            echo htmlspecialchars(
                implode(", ", $_SESSION['cart'])
            );
            ?>
        </p>

        <p>
            <strong>Browsing History:</strong>
            <?php
            echo htmlspecialchars(
                implode(", ", $_SESSION['history'])
            );
            ?>
        </p>

    </div>

    <a href="index.php">
        <button>Continue Shopping</button>
    </a>

</div>

</body>
</html>