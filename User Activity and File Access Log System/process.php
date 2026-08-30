<?php

session_start();

$username = trim($_POST['username']);
$file = basename($_POST['file']);

$time = date("d-m-Y h:i:s A");

$_SESSION['username'] = $username;

setcookie(
    "last_user",
    $username,
    time() + 86400
);

$loginLog =
    "User: $username | Login Time: $time";

$fileLog =
    "User: $username | File: $file | Time: $time";

file_put_contents(
    "login_history.txt",
    $loginLog . PHP_EOL,
    FILE_APPEND
);

file_put_contents(
    "file_access_log.txt",
    $fileLog . PHP_EOL,
    FILE_APPEND
);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Activity Report</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Activity Recorded</h2>

    <div class="result">

        <p><strong>User:</strong>
        <?php echo htmlspecialchars($username); ?></p>

        <p><strong>File Accessed:</strong>
        <?php echo htmlspecialchars($file); ?></p>

        <p><strong>Date & Time:</strong>
        <?php echo $time; ?></p>

        <p>Login and file access information
        saved successfully.</p>

    </div>

    <a href="index.php">Record Another Activity</a>

</div>

</body>
</html>