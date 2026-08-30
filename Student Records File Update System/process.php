<?php

$id = trim($_POST['id']);
$name = trim($_POST['name']);
$course = trim($_POST['course']);
$mark = $_POST['mark'];

$record = "$id | $name | $course | $mark";

file_put_contents(
    "students.txt",
    $record . PHP_EOL,
    FILE_APPEND
);

$records = file_get_contents("students.txt");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Student Record Saved</h2>

    <div class="result">

        <p><strong>Student ID:</strong>
        <?php echo htmlspecialchars($id); ?></p>

        <p><strong>Name:</strong>
        <?php echo htmlspecialchars($name); ?></p>

        <p><strong>Course:</strong>
        <?php echo htmlspecialchars($course); ?></p>

        <p><strong>Mark:</strong>
        <?php echo htmlspecialchars($mark); ?></p>

    </div>

    <h3>Updated Student Records</h3>

    <pre><?php echo htmlspecialchars($records); ?></pre>

    <a href="index.php">Add New Student</a>

</div>

</body>
</html>