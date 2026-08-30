<!DOCTYPE html>
<html>
<head>
    <title>Secure Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Secure Login System</h2>

    <form action="process.php" method="POST">

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <label>Remember Me</label>
        <select name="remember">
            <option value="No">No</option>
            <option value="Yes">Yes</option>
        </select>

        <input type="submit" value="Login">

    </form>

    <p class="info">
        Demo Login: admin / 1234
    </p>

</div>

</body>
</html>