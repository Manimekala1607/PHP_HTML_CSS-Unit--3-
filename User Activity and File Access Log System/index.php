<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Activity Log</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>User Activity & File Access Log</h2>

    <form action="process.php" method="POST">

        <label>Username</label>
        <input type="text" name="username" required>

        <label>File Accessed</label>
        <input type="text" name="file"
               placeholder="Example: report.pdf" required>

        <input type="submit" value="Record Activity">

    </form>

</div>

</body>
</html>