<?php

$search = strtolower(trim($_POST['search']));
$category = $_POST['category'];

$folders = [];

if ($category == "all" || $category == "images") {
    $folders[] = "images";
}

if ($category == "all" || $category == "videos") {
    $folders[] = "videos";
}

$filesFound = [];

foreach ($folders as $folder) {

    if (is_dir($folder)) {

        $files = scandir($folder);

        foreach ($files as $file) {

            if ($file == "." || $file == "..") {
                continue;
            }

            if ($search == "" ||
                strpos(strtolower($file), $search) !== false) {

                $filesFound[] = $folder . "/" . $file;
            }
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Multimedia Search Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Multimedia Search Results</h2>

    <div class="result">

    <?php

    if (count($filesFound) > 0) {

        foreach ($filesFound as $file) {
            echo "<p>📁 " .
                 htmlspecialchars($file) .
                 "</p>";
        }

    } else {

        echo "<p>No multimedia files found.</p>";
    }

    ?>

    </div>

    <a href="index.php">Search Again</a>

</div>

</body>
</html>