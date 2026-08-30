<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "doctor" && $password == "1234") {

    session_regenerate_id(true);

    $_SESSION['medical_user'] = $username;
    $_SESSION['medical_access'] = true;

    header("Location: records.php");
    exit();

} else {

    $message = "Unauthorized access. Login failed.";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Medical Access Denied</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Access Denied</h2>

    <div class="result">
        <?php echo htmlspecialchars($message); ?>
    </div>

    <a href="index.php">Try Again</a>

</div>

</body>
</html>