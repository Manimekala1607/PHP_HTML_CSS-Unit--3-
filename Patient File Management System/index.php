<!DOCTYPE html>
<html>
<head>
    <title>Patient File Management</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Patient File Management</h2>

    <form action="process.php" method="POST">

        <label>Patient ID</label>
        <input type="text" name="patient_id" required>

        <label>Patient Name</label>
        <input type="text" name="name" required>

        <label>Age</label>
        <input type="number" name="age" min="1" required>

        <label>Department</label>
        <select name="department" required>
            <option value="">Select Department</option>
            <option>Cardiology</option>
            <option>Neurology</option>
            <option>General</option>
            <option>Orthopedics</option>
        </select>

        <label>Problem</label>
        <textarea name="problem" rows="4" required></textarea>

        <input type="submit" value="Save Patient">

    </form>

</div>

</body>
</html>