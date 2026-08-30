<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "student" && $password == "1234") {

    session_regenerate_id(true);

    $_SESSION['exam_user'] = $username;
    $_SESSION['exam_access'] = true;

    setcookie(
        "exam_user",
        $username,
        time() + 3600
    );

    header("Location: exam.php");
    exit();

} else {

    $message = "Unauthorized access. Invalid login details.";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Access Denied</title>
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