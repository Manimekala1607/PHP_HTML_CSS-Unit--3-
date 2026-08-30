<?php

$title = trim($_POST['title']);

$date = new DateTime($_POST['date']);

$currentDate = date("d-m-Y");
$currentTime = date("h:i:s A");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Date Time Report</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Date & Time Report</h2>

    <div class="result">

        <p>
            <strong>Report Title:</strong>
            <?php echo htmlspecialchars($title); ?>
        </p>

        <p>
            <strong>Current Date:</strong>
            <?php echo $currentDate; ?>
        </p>

        <p>
            <strong>Current Time:</strong>
            <?php echo $currentTime; ?>
        </p>

        <p>
            <strong>Selected Date:</strong>
            <?php echo $date->format("d-m-Y"); ?>
        </p>

        <p>
            <strong>Format 1:</strong>
            <?php echo $date->format("Y-m-d"); ?>
        </p>

        <p>
            <strong>Format 2:</strong>
            <?php echo $date->format("l, d F Y"); ?>
        </p>

    </div>

    <a href="index.php">Generate Another Report</a>

</div>

</body>
</html>