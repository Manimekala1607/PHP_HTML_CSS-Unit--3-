<!DOCTYPE html>
<html>
<head>
    <title>Examination Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Examination Login</h2>

    <form action="process.php" method="POST">

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <input type="submit" value="Login">

    </form>

    <p class="info">
        Demo Login: student / 1234
    </p>

</div>

</body>
</html>