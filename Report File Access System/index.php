<!DOCTYPE html>
<html>
<head>
    <title>Report File Access</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Report File Access System</h2>

    <form action="process.php" method="POST">

        <label>Report Category</label>

        <select name="category">
            <option value="academic">Academic</option>
            <option value="attendance">Attendance</option>
            <option value="project">Project</option>
        </select>

        <input type="submit" value="View Reports">

    </form>

</div>

</body>
</html>