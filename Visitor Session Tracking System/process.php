<?php

session_start();

if (!isset($_SESSION['visit_count'])) {
    $_SESSION['visit_count'] = 0;
}

$_SESSION['visit_count']++;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Visitor Tracking</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Visitor Session Report</h2>

    <div class="result">

        <p>
            <strong>Session Active:</strong> Yes
        </p>

        <p>
            <strong>Pages Visited:</strong>
            <?php echo $_SESSION['visit_count']; ?>
        </p>

        <p>
            Session-based visitor tracking is active.
        </p>

    </div>

    <a href="index.php">Back to Home</a>

</div>

</body>
</html>