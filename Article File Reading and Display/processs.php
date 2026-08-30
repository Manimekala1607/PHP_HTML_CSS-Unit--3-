<?php

$file = "article.txt";

if (!file_exists($file)) {

    $article = "Web development is the process of creating websites and web applications.";

    file_put_contents($file, $article);
}

header("Location: index.php");
exit();

?>