<?php

$name = $_POST['name'];
$preference = $_POST['preference'];

setcookie("customer_name", $name, time() + (86400 * 30));
setcookie("customer_preference", $preference, time() + (86400 * 30));

if (isset($_COOKIE['visit_count'])) {
    $visitCount = $_COOKIE['visit_count'] + 1;
} else {
    $visitCount = 1;
}

setcookie("visit_count", $visitCount, time() + (86400 * 30));

?>

<!DOCTYPE html>
<html>
<head>
    <title>Visit Details</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Customer Visit Details</h2>

    <p class="success">Preference Saved Successfully!</p>

    <table>
        <tr>
            <th>Customer Name</th>
            <td><?php echo htmlspecialchars($name); ?></td>
        </tr>

        <tr>
            <th>Preference</th>
            <td><?php echo htmlspecialchars($preference); ?></td>
        </tr>

        <tr>
            <th>Visit Count</th>
            <td><?php echo $visitCount; ?></td>
        </tr>
    </table>

    <br>

    <a href="index.php">
        <button>Visit Again</button>
    </a>

</div>

</body>
</html>