<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "1234") {

    session_regenerate_id(true);

    $_SESSION['username'] = $username;

    if ($_POST['remember'] == "Yes") {
        setcookie(
            "login_user",
            $username,
            time() + (86400 * 30)
        );
    }

    $message = "Login Successful!";
} else {

    $message = "Invalid Username or Password!";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Output</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2><?php echo $message; ?></h2>

    <?php if (isset($_SESSION['username'])) { ?>

        <div class="result">

            <p>
                Welcome,
                <strong>
                    <?php echo htmlspecialchars($_SESSION['username']); ?>
                </strong>
            </p>

            <p>Session authentication is active.</p>

            <?php
            if (isset($_COOKIE['login_user'])) {
                echo "<p>Cookie authentication is also enabled.</p>";
            }
            ?>

        </div>

    <?php } ?>

    <a href="index.php">Back to Login</a>

</div>

</body>
</html>