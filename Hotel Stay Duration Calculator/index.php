<!DOCTYPE html>
<html>
<head>
    <title>Hotel Stay Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Hotel Stay Duration</h2>

    <form action="process.php" method="POST">

        <label>Guest Name</label>
        <input type="text" name="name" required>

        <label>Check-in Date</label>
        <input type="date" name="checkin" required>

        <label>Check-out Date</label>
        <input type="date" name="checkout" required>

        <input type="submit" value="Calculate Stay">

    </form>

</div>

</body>
</html>