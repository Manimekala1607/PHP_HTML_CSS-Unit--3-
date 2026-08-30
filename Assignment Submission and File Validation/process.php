<?php

$name = $_POST['name'];
$regno = $_POST['regno'];
$department = $_POST['department'];

$fileName = $_FILES['assignment']['name'];
$fileTmp = $_FILES['assignment']['tmp_name'];
$fileSize = $_FILES['assignment']['size'];

$allowedTypes = ['pdf', 'doc', 'docx'];

$fileExtension = strtolower(
    pathinfo($fileName, PATHINFO_EXTENSION)
);

if (!in_array($fileExtension, $allowedTypes)) {

    $message = "Invalid file type. Please upload PDF, DOC or DOCX.";

} elseif ($fileSize > 5000000) {

    $message = "File size must be less than 5 MB.";

} else {

    $folder = "uploads/" . $department;

    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }

    $newName = $regno . "_" . basename($fileName);

    move_uploaded_file(
        $fileTmp,
        $folder . "/" . $newName
    );

    $message = "Assignment uploaded successfully!";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Assignment Upload Result</h2>

    <p class="success">
        <?php echo htmlspecialchars($message); ?>
    </p>

    <table>
        <tr>
            <th>Student Name</th>
            <td><?php echo htmlspecialchars($name); ?></td>
        </tr>

        <tr>
            <th>Register Number</th>
            <td><?php echo htmlspecialchars($regno); ?></td>
        </tr>

        <tr>
            <th>Department</th>
            <td><?php echo htmlspecialchars($department); ?></td>
        </tr>

        <tr>
            <th>File Name</th>
            <td><?php echo htmlspecialchars($fileName); ?></td>
        </tr>
    </table>

    <br>

    <a href="index.php">
        <button>Upload Another</button>
    </a>

</div>

</body>
</html>