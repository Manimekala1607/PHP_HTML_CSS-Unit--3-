<!DOCTYPE html>
<html>
<head>
    <title>Resume Upload Validation</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Resume Upload</h2>

    <form action="process.php" method="POST"
          enctype="multipart/form-data">

        <label>Applicant Name</label>
        <input type="text" name="name" required>

        <label>Select Resume</label>
        <input type="file" name="resume" required>

        <p class="hint">Allowed: PDF, DOC, DOCX</p>

        <input type="submit" value="Upload Resume">

    </form>

</div>

</body>
</html>