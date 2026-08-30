<?php

$name = trim($_POST['name']);
$file = $_FILES['resume'];

$allowed = ["pdf", "doc", "docx"];

$filename = basename($file['name']);
$extension = strtolower(
    pathinfo($filename, PATHINFO_EXTENSION)
);

if ($file['error'] != 0) {

    $message = "Error while uploading the file.";

} elseif (!in_array($extension, $allowed)) {

    $message = "Invalid file type. Please upload PDF, DOC or DOCX.";

} elseif ($file['size'] > 2 * 1024 * 1024) {

    $message = "File size must be less than 2 MB.";

} else {

    if (!is_dir("resumes")) {
        mkdir("resumes");
    }

    $newFile = "resumes/" .
               time() . "_" . $filename;

    move_uploaded_file(
        $file['tmp_name'],
        $newFile
    );

    $message = "Resume uploaded successfully.";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Resume Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Resume Upload Result</h2>

    <div class="result">
        <p><strong>Applicant:</strong>
        <?php echo htmlspecialchars($name); ?></p>

        <p><?php echo htmlspecialchars($message); ?></p>
    </div>

    <a href="index.php">Upload Another Resume</a>

</div>

</body>
</html>