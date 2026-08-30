<!DOCTYPE html>
<html>
<head>
    <title>Shipment Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Shipment Records</h2>

    <form action="process.php" method="POST">

        <label>Shipment ID</label>
        <input type="text" name="shipment_id" required>

        <label>Customer Name</label>
        <input type="text" name="customer" required>

        <label>Destination</label>
        <input type="text" name="destination" required>

        <label>Shipment Status</label>
        <select name="status">
            <option>Pending</option>
            <option>Shipped</option>
            <option>Delivered</option>
        </select>

        <input type="submit" value="Save Shipment">

    </form>

</div>

</body>
</html>