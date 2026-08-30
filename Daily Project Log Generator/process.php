<?php

$project = trim($_POST['project']);
$member = trim($_POST['member']);
$work = trim($_POST['work']);

$date = date("Y-m-d");
$time = date("h:i:s A");

if (!is_dir("logs")) {
    mkdir("logs");
}

$file = "logs/project_" . $date . ".txt";

$log = "Project Name: $project\n";
$log .= "Team Member: $member\n";
$log .= "Date: $date\n";
$log .= "Time: $time\n";
$log .= "Work Completed: $work\n";
$log .= "--------------------------\n";

file_put_contents(
    $file,
    $log,
    FILE_APPEND
);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Project Log</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Daily Project Log Created</h2>

    <div class="result">

        <p><strong>Project:</strong>
        <?php echo htmlspecialchars($project); ?></p>

        <p><strong>Team Member:</strong>
        <?php echo htmlspecialchars($member); ?></p>

        <p><strong>Date:</strong>
        <?php echo $date; ?></p>

        <p><strong>Time:</strong>
        <?php echo $time; ?></p>

        <p><strong>Log File:</strong>
        <?php echo htmlspecialchars($file); ?></p>

    </div>

    <a href="index.php">Create Another Log</a>

</div>

</body>
</html>