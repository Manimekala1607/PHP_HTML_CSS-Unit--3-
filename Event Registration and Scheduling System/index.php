<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Event Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Event Registration</h2>

    <form action="process.php" method="POST">

        <label>Participant Name</label>
        <input type="text" name="name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Event Name</label>
        <select name="event">
            <option>Tech Workshop</option>
            <option>Paper Presentation</option>
            <option>Web Development Seminar</option>
            <option>Project Expo</option>
        </select>

        <label>Event Date</label>
        <input type="date" name="date" required>

        <input type="submit" value="Register">

    </form>

</div>

</body>
</html>