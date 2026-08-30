<!DOCTYPE html>
<html>
<head>
    <title>Login Redirection</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>User Login</h2>

    <form action="process.php" method="POST">

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <input type="submit" value="Login">

    </form>

    <p class="info">
        Demo: admin / 1234
    </p>

</div>

</body>
</html>