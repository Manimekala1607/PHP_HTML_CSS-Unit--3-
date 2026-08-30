<!DOCTYPE html>
<html>
<head>
    <title>Date Time Report</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Date & Time Report</h2>

    <form action="process.php" method="POST">

        <label>Report Title</label>
        <input type="text" name="title" required>

        <label>Select Date</label>
        <input type="date" name="date" required>

        <input type="submit" value="Generate Report">

    </form>

</div>

</body>
</html>