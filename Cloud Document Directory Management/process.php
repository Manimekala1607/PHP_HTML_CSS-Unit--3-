<?php

$folder = "documents";

if (!is_dir($folder)) {
    mkdir($folder);
}

$message = "";

if (isset($_POST['upload'])) {

    $file = $_FILES['document'];

    $filename = basename($file['name']);
    $target = $folder . "/" . $filename;

    $allowed = [
        "pdf",
        "doc",
        "docx",
        "txt"
    ];

    $extension = strtolower(
        pathinfo($filename, PATHINFO_EXTENSION)
    );

    if (!in_array($extension, $allowed)) {

        $message = "Invalid document type.";

    } elseif (file_exists($target)) {

        $message = "File already exists.";

    } else {

        move_uploaded_file(
            $file['tmp_name'],
            $target
        );

        $message = "Document uploaded successfully.";
    }
}

if (isset($_POST['delete'])) {

    $filename = basename($_POST['delete_file']);

    $target = $folder . "/" . $filename;

    if (file_exists($target)) {

        unlink($target);
        $message = "Document deleted successfully.";

    } else {

        $message = "Document not found.";
    }
}

$documents = [];

if (is_dir($folder)) {

    $files = scandir($folder);

    foreach ($files as $file) {

        if ($file != "." && $file != "..") {
            $documents[] = $file;
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Document Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Document Management</h2>

    <p class="message">
        <?php echo htmlspecialchars($message); ?>
    </p>

    <h3>Stored Documents</h3>

    <div class="result">

        <?php

        if (count($documents) > 0) {

            foreach ($documents as $file) {

                echo "<p>📄 " .
                     htmlspecialchars($file) .
                     "</p>";
            }

        } else {

            echo "<p>No documents available.</p>";
        }

        ?>

    </div>

    <a href="index.php">Back to Document Management</a>

</div>

</body>
</html>