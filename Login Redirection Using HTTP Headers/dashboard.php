<?php

session_start();

if (!isset($_SESSION['user'])) {

    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Welcome to Dashboard</h2>

    <div class="result">

        <p>
            Welcome,
            <strong>
                <?php echo htmlspecialchars($_SESSION['user']); ?>
            </strong>
        </p>

        <p>Login authentication successful.</p>

        <p>You have been redirected using HTTP headers.</p>

    </div>

</div>

</body>
</html>