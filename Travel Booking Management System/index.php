<!DOCTYPE html>
<html>
<head>
    <title>Travel Booking</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Travel Booking Management</h2>

    <form action="process.php" method="POST">

        <label>Customer Name</label>
        <input type="text" name="name" required>

        <label>Mobile Number</label>
        <input type="tel" name="mobile"
               pattern="[0-9]{10}" required>

        <label>Destination</label>
        <select name="destination" required>
            <option value="">Select Destination</option>
            <option>Chennai</option>
            <option>Bangalore</option>
            <option>Coimbatore</option>
            <option>Ooty</option>
        </select>

        <label>Travel Date</label>
        <input type="date" name="travel_date" required>

        <input type="submit" value="Book Travel">

    </form>

</div>

</body>
</html>