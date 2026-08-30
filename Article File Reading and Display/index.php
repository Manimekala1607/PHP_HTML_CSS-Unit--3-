<?php

$file = "article.txt";

if (file_exists($file)) {
    $content = file_get_contents($file);
    $lines = file($file);
    $lineCount = count($lines);
} else {
    $content = "Article file not found.";
    $lineCount = 0;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Article File Reader</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Article File Reader</h2>

    <div class="article">
        <?php echo nl2br(htmlspecialchars($content)); ?>
    </div>

    <p class="count">
        Number of Lines: <?php echo $lineCount; ?>
    </p>

</div>

</body>
</html>