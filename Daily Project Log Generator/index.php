<!DOCTYPE html>
<html>
<head>
    <title>Daily Project Log</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Daily Project Log Generator</h2>

    <form action="process.php" method="POST">

        <label>Project Name</label>
        <input type="text" name="project" required>

        <label>Team Member</label>
        <input type="text" name="member" required>

        <label>Work Completed</label>
        <textarea name="work" required></textarea>

        <input type="submit" value="Generate Log">

    </form>

</div>

</body>
</html>