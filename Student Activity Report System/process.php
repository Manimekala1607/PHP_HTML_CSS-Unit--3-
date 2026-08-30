<?php

session_start();

$name = trim($_POST['name']);
$activity = trim($_POST['activity']);
$department = $_POST['department'];

$date = date("d-m-Y h:i:s A");

if (!isset($_SESSION['activities'])) {
    $_SESSION['activities'] = [];
}

$record = "$date | $name | $department | $activity";

$_SESSION['activities'][] = $record;

file_put_contents(
    "student_activity.txt",
    $record . PHP_EOL,
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

        <p><strong>Student:</strong>
        <?php echo htmlspecialchars($name); ?></p>

        <p><strong>Department:</strong>
        <?php echo htmlspecialchars($department); ?></p>

        <p><strong>Activity:</strong>
        <?php echo htmlspecialchars($activity); ?></p>

        <p><strong>Date & Time:</strong>
        <?php echo $date; ?></p>

    </div>

    <a href="index.php">Add Another Activity</a>

</div>

</body>
</html>