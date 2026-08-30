<?php

$folder = trim($_POST['folder']);
$action = $_POST['action'];
$new_name = trim($_POST['new_name']);

$base = "departments";

if (!is_dir($base)) {
    mkdir($base);
}

$folderPath = $base . "/" . $folder;

if ($action == "create") {

    if (!is_dir($folderPath)) {
        mkdir($folderPath);
        $message = "Department folder created successfully.";
    } else {
        $message = "Folder already exists.";
    }

} elseif ($action == "rename") {

    $newPath = $base . "/" . $new_name;

    if (is_dir($folderPath) && $new_name != "") {
        rename($folderPath, $newPath);
        $message = "Folder renamed successfully.";
    } else {
        $message = "Folder not found or new name is empty.";
    }

} elseif ($action == "delete") {

    if (is_dir($folderPath)) {
        rmdir($folderPath);
        $message = "Folder deleted successfully.";
    } else {
        $message = "Folder not found.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Directory Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Directory Management Result</h2>

    <div class="result">
        <?php echo htmlspecialchars($message); ?>
    </div>

    <a href="index.php">Back</a>

</div>

</body>
</html>