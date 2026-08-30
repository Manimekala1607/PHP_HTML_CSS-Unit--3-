<?php

$shipment_id = trim($_POST['shipment_id']);
$customer = trim($_POST['customer']);
$destination = trim($_POST['destination']);
$status = $_POST['status'];

if (!is_dir("shipments")) {
    mkdir("shipments");
}

$folder = "shipments/" .
          preg_replace("/[^A-Za-z0-9_-]/", "_", $destination);

if (!is_dir($folder)) {
    mkdir($folder, 0777, true);
}

$file = $folder . "/" . $shipment_id . ".txt";

$data = "Shipment ID: $shipment_id\n";
$data .= "Customer: $customer\n";
$data .= "Destination: $destination\n";
$data .= "Status: $status\n";

file_put_contents($file, $data);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Shipment Output</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Shipment Saved Successfully</h2>

    <div class="result">
        <p><strong>Shipment ID:</strong>
        <?php echo htmlspecialchars($shipment_id); ?></p>

        <p><strong>Customer:</strong>
        <?php echo htmlspecialchars($customer); ?></p>

        <p><strong>Destination:</strong>
        <?php echo htmlspecialchars($destination); ?></p>

        <p><strong>Status:</strong>
        <?php echo htmlspecialchars($status); ?></p>

        <p><strong>File:</strong>
        <?php echo htmlspecialchars($file); ?></p>
    </div>

    <a href="index.php">Add Another Shipment</a>

</div>

</body>
</html>