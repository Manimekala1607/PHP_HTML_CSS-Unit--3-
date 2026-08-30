<?php

$name = trim($_POST['name']);

$checkin = new DateTime($_POST['checkin']);
$checkout = new DateTime($_POST['checkout']);

if ($checkout <= $checkin) {

    $message = "Check-out date must be after check-in date.";

} else {

    $duration = $checkin->diff($checkout)->days;

    $message =
        "Guest Name: " . htmlspecialchars($name) .
        "<br>Check-in: " . $checkin->format("d-m-Y") .
        "<br>Check-out: " . $checkout->format("d-m-Y") .
        "<br>Total Stay: " . $duration . " day(s)";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Stay Duration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Stay Duration Result</h2>

    <div class="result">
        <?php echo $message; ?>
    </div>

    <a href="index.php">Calculate Again</a>

</div>

</body>
</html>