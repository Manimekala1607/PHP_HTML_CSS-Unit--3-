<?php
session_start();

if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = "Priya";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Secure Document Management</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Secure Document Management</h2>

    <p class="user">
        Logged in as:
        <strong><?php echo $_SESSION['user']; ?></strong>
    </p>

    <form action="process.php" method="POST"
          enctype="multipart/form-data">

        <label>Select Document</label>
        <input type="file" name="document" required>

        <input type="submit"
               name="upload"
               value="Upload Document">

    </form>

</div>

</body>
</html>