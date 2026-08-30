<?php

$category = $_POST['category'];

$folders = [
    "academic",
    "attendance",
    "project"
];

$folder = "reports/" . $category;

$files = [];

if (is_dir($folder)) {

    $items = scandir($folder);

    foreach ($items as $item) {

        if ($item != "." && $item != "..") {
            $files[] = $item;
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Available Reports</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Available Reports</h2>

    <p>
        <strong>Category:</strong>
        <?php echo htmlspecialchars($category); ?>
    </p>

    <div class="result">

    <?php

    if (count($files) > 0) {

        foreach ($files as $file) {

            $safeFile = basename($file);

            echo "<p>📄 " .
                 htmlspecialchars($safeFile) .
                 "</p>";
        }

    } else {

        echo "<p>No reports available.</p>";
    }

    ?>

    </div>

    <a href="index.php">Back</a>

</div>

</body>
</html>