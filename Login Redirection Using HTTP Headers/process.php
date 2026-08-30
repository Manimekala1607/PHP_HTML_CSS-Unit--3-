<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "1234") {

    $_SESSION['user'] = $username;

    header("Location: dashboard.php");
    exit();

} else {

    $message = "Invalid username or password.";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Error</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Login Failed</h2>

    <div class="result">
        <?php echo $message; ?>
    </div>

    <a href="index.php">Try Again</a>

</div>

</body>
</html>