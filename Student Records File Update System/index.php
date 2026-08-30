<!DOCTYPE html>
<html>
<head>
    <title>Student Record System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Student Record Management</h2>

    <form action="process.php" method="POST">

        <label>Student ID</label>
        <input type="text" name="id" required>

        <label>Student Name</label>
        <input type="text" name="name" required>

        <label>Course</label>
        <input type="text" name="course" required>

        <label>Mark</label>
        <input type="number" name="mark" required>

        <input type="submit" value="Save Record">

    </form>

</div>

</body>
</html>