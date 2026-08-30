<?php

$username = $_POST['username'];
$password = $_POST['password'];

$currentTime = date("d-m-Y h:i:s A");

if (isset($_COOKIE['last_login'])) {
    $lastLogin = $_COOKIE['last_login'];
} else {
    $lastLogin = "First Login";
}

setcookie(
    "last_login",
    $currentTime,
    time() + (86400 * 30)
);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Details</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Login Successful</h2>

    <p class="success">
        Welcome, <?php echo htmlspecialchars($username); ?>!
    </p>

    <div class="details">

        <p>
            <strong>Username:</strong>
            <?php echo htmlspecialchars($username); ?>
        </p>

        <p>
            <strong>Previous Login:</strong>
            <?php echo htmlspecialchars($lastLogin); ?>
        </p>

        <p>
            <strong>Current Login:</strong>
            <?php echo $currentTime; ?>
        </p>

    </div>

    <a href="index.php">
        <button>Login Again</button>
    </a>

</div>

</body>
</html>