<!DOCTYPE html>
<html>
<head>
    <title>Medical Record Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Medical Record Login</h2>

    <form action="process.php" method="POST">

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <input type="submit" value="Secure Login">

    </form>

    <p class="info">
        Demo Login: doctor / 1234
    </p>

</div>

</body>
</html>