<?php

session_start();

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$event = $_POST['event'];
$date = $_POST['date'];

$eventDate = new DateTime($date);
$today = new DateTime();

if ($eventDate < $today) {

    $message = "Please select a future event date.";

} else {

    if (!isset($_SESSION['registrations'])) {
        $_SESSION['registrations'] = [];
    }

    $record =
        "$name | $email | $event | " .
        $eventDate->format("d-m-Y");

    $_SESSION['registrations'][] = $record;

    file_put_contents(
        "events.txt",
        $record . PHP_EOL,
        FILE_APPEND
    );

    $message = "Event registration successful!";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Event Registration Output</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2><?php echo $message; ?></h2>

    <?php if ($eventDate >= $today) { ?>

    <div class="result">

        <p>
            <strong>Participant:</strong>
            <?php echo htmlspecialchars($name); ?>
        </p>

        <p>
            <strong>Email:</strong>
            <?php echo htmlspecialchars($email); ?>
        </p>

        <p>
            <strong>Event:</strong>
            <?php echo htmlspecialchars($event); ?>
        </p>

        <p>
            <strong>Event Date:</strong>
            <?php echo $eventDate->format("d-m-Y"); ?>
        </p>

        <p>
            <strong>Day:</strong>
            <?php echo $eventDate->format("l"); ?>
        </p>

    </div>

    <?php } ?>

    <a href="index.php">Register Another Event</a>

</div>

</body>
</html>