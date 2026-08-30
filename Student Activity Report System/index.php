<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Activity Report</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Student Activity Report</h2>

    <form action="process.php" method="POST">

        <label>Student Name</label>
        <input type="text" name="name" required>

        <label>Activity</label>
        <input type="text" name="activity" required>

        <label>Department</label>
        <select name="department">
            <option>BCA</option>
            <option>B.Sc Computer Science</option>
            <option>B.Com</option>
            <option>MCA</option>
        </select>

        <input type="submit" value="Submit Activity">

    </form>

</div>

</body>
</html>