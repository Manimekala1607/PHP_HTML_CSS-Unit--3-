<?php

session_start();

if (!isset($_SESSION['user'])) {
    die("Unauthorized access.");
}

if (!isset($_POST['upload'])) {
    die("Invalid request.");
}

$file = $_FILES['document'];

$allowed = ["pdf", "doc", "docx", "txt"];

$filename = basename($file['name']);

$extension = strtolower(
    pathinfo($filename, PATHINFO_EXTENSION)
);

if (!in_array($extension, $allowed)) {

    $message = "Invalid document type.";

} elseif ($file['error'] != 0) {

    $message = "File upload failed.";

} else {

    if (!is_dir("secure_documents")) {
        mkdir("secure_documents");
    }

    $target = "secure_documents/" . $filename;

    if (file_exists($target)) {

        $message = "Duplicate file upload is not allowed.";

    } else {

        move_uploaded_file(
            $file['tmp_name'],
            $target
        );

        $message = "Document uploaded securely.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Secure Document Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Document Management Result</h2>

    <div class="result">

        <p><strong>User:</strong>
        <?php echo htmlspecialchars($_SESSION['user']); ?></p>

        <p><?php echo htmlspecialchars($message); ?></p>

    </div>

    <a href="index.php">Back</a>

</div>

</body>
</html>