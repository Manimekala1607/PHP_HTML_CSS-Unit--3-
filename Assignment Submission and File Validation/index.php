<!DOCTYPE html>
<html>
<head>
    <title>Assignment Submission</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Assignment Submission</h2>

    <form action="process.php" method="POST" enctype="multipart/form-data">

        <label>Student Name</label>
        <input type="text" name="name" required>

        <label>Register Number</label>
        <input type="text" name="regno" required>

        <label>Department</label>
        <select name="department" required>
            <option value="">Select Department</option>
            <option>Computer Science</option>
            <option>Commerce</option>
            <option>Management</option>
        </select>

        <label>Select Assignment</label>
        <input type="file" name="assignment" required>

        <p class="note">Allowed files: PDF, DOC, DOCX</p>

        <input type="submit" value="Upload Assignment">

    </form>

</div>

</body>
</html>