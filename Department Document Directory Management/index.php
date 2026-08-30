<!DOCTYPE html>
<html>
<head>
    <title>Department Directory</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Department Directory Management</h2>

    <form action="process.php" method="POST">

        <label>Department Name</label>
        <input type="text" name="folder" required>

        <label>Action</label>
        <select name="action">
            <option value="create">Create Folder</option>
            <option value="rename">Rename Folder</option>
            <option value="delete">Delete Folder</option>
        </select>

        <label>New Name</label>
        <input type="text" name="new_name"
               placeholder="For rename only">

        <input type="submit" value="Perform Action">

    </form>

</div>

</body>
</html>