<!DOCTYPE html>
<html>
<head>
    <title>Student Records Backup</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Student Records Backup</h2>

    <form action="process.php" method="POST">

        <label>Student Name</label>
        <input type="text" name="name" required>

        <label>Register Number</label>
        <input type="text" name="regno" required>

        <label>Course</label>
        <input type="text" name="course" required>

        <label>Mark</label>
        <input type="number" name="mark" required>

        <input type="submit" value="Save & Backup">

    </form>

</div>

</body>
</html>