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
    <title>Visitor Session Tracking</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Visitor Session Tracking</h2>

    <div class="result">

        <p><strong>Current Page:</strong> Home Page</p>

        <p>
            <strong>Pages Visited:</strong>
            <?php echo $_SESSION['visit_count']; ?>
        </p>

        <p>
            Your page visit count is maintained
            during this session.
        </p>

    </div>

    <a href="index.php">Refresh / Visit Again</a>

</div>

</body>
</html>