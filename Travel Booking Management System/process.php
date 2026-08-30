<?php

session_start();

$name = trim($_POST['name']);
$mobile = trim($_POST['mobile']);
$destination = $_POST['destination'];
$travel_date = $_POST['travel_date'];

$date = new DateTime($travel_date);
$today = new DateTime();

if ($date < $today) {

    $message = "Please select a future travel date.";

} else {

    $_SESSION['customer'] = $name;
    $_SESSION['destination'] = $destination;
    $_SESSION['travel_date'] = $travel_date;

    $booking_id = "TR" . rand(1000, 9999);

    $record = "$booking_id | $name | $mobile | "
            . "$destination | " . $date->format("d-m-Y");

    file_put_contents(
        "travel_bookings.txt",
        $record . PHP_EOL,
        FILE_APPEND
    );

    $message = "Travel Booking Confirmed!";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2><?php echo $message; ?></h2>

    <?php if ($date >= $today) { ?>

    <div class="result">

        <p><strong>Booking ID:</strong>
        <?php echo $booking_id; ?></p>

        <p><strong>Customer:</strong>
        <?php echo htmlspecialchars($name); ?></p>

        <p><strong>Mobile:</strong>
        <?php echo htmlspecialchars($mobile); ?></p>

        <p><strong>Destination:</strong>
        <?php echo htmlspecialchars($destination); ?></p>

        <p><strong>Travel Date:</strong>
        <?php echo $date->format("d-m-Y"); ?></p>

    </div>

    <?php } ?>

    <a href="index.php">Book Another Trip</a>

</div>

</body>
</html>