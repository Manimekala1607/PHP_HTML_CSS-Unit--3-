<?php

$patientId = $_POST['patient_id'];
$name = $_POST['name'];
$age = $_POST['age'];
$department = $_POST['department'];
$problem = $_POST['problem'];

$folder = "patients";

if (!is_dir($folder)) {
    mkdir($folder);
}

$file = $folder . "/" . $department . ".txt";

$data = "Patient ID: $patientId\n";
$data .= "Name: $name\n";
$data .= "Age: $age\n";
$data .= "Problem: $problem\n";
$data .= "-------------------------\n";

file_put_contents($file, $data, FILE_APPEND);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Patient Details</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Patient Record Saved</h2>

    <p class="success">Patient information saved successfully!</p>

    <table>
        <tr>
            <th>Patient ID</th>
            <td><?php echo htmlspecialchars($patientId); ?></td>
        </tr>

        <tr>
            <th>Patient Name</th>
            <td><?php echo htmlspecialchars($name); ?></td>
        </tr>

        <tr>
            <th>Age</th>
            <td><?php echo $age; ?></td>
        </tr>

        <tr>
            <th>Department</th>
            <td><?php echo htmlspecialchars($department); ?></td>
        </tr>

        <tr>
            <th>Problem</th>
            <td><?php echo htmlspecialchars($problem); ?></td>
        </tr>
    </table>

    <br>

    <a href="index.php">
        <button>Add Another Patient</button>
    </a>

</div>

</body>
</html>