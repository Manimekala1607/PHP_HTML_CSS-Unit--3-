<!DOCTYPE html>
<html>
<head>
    <title>Cloud Document Management</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Cloud Document Management</h2>

    <form action="process.php"
          method="POST"
          enctype="multipart/form-data">

        <label>Upload Document</label>
        <input type="file" name="document" required>

        <input type="submit"
               name="upload"
               value="Upload Document">

    </form>

    <hr>

    <h3>Delete Document</h3>

    <form action="process.php" method="POST">

        <label>File Name</label>
        <input type="text" name="delete_file"
               placeholder="Example: notes.pdf">

        <input type="submit"
               name="delete"
               value="Delete Document">

    </form>

</div>

</body>
</html>