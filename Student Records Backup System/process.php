<?php

$name = trim($_POST['name']);
$regno = trim($_POST['regno']);
$course = trim($_POST['course']);
$mark = $_POST['mark'];

if (!is_dir("backup")) {
    mkdir("backup");
}

$record = "Name: $name\n";
$record .= "Register Number: $regno\n";
$record .= "Course: $course\n";
$record .= "Mark: $mark\n";

file_put_contents(
    "students.txt",
    $record . "\n",
    FILE_APPEND
);

$time = date("d-m-Y h:i:s A");

$backupFile = "backup/student_backup_" .
              date("Y-m-d_H-i-s") . ".txt";

file_put_contents($backupFile, $record);

file_put_contents(
    "backup_log.txt",
    "Backup Created: $time | File: $backupFile" .
    PHP_EOL,
    FILE_APPEND
);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Backup Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Backup Completed Successfully</h2>

    <div class="result">

        <p><strong>Student:</strong>
        <?php echo htmlspecialchars($name); ?></p>

        <p><strong>Register Number:</strong>
        <?php echo htmlspecialchars($regno); ?></p>

        <p><strong>Course:</strong>
        <?php echo htmlspecialchars($course); ?></p>

        <p><strong>Backup Time:</strong>
        <?php echo $time; ?></p>

        <p><strong>Backup File:</strong>
        <?php echo $backupFile; ?></p>

    </div>

    <a href="index.php">Add Another Record</a>

</div>

</body>
</html>