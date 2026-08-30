<!DOCTYPE html>
<html>
<head>
    <title>Multimedia File Management</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Multimedia File Management</h2>

    <form action="process.php" method="POST">

        <label>Search File</label>
        <input type="text" name="search"
               placeholder="Enter file name">

        <label>Category</label>
        <select name="category">
            <option value="all">All Files</option>
            <option value="images">Images</option>
            <option value="videos">Videos</option>
        </select>

        <input type="submit" value="Search Files">

    </form>

</div>

</body>
</html>