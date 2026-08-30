<?php

session_start();

if (
    !isset($_SESSION['medical_user']) ||
    !isset($_SESSION['medical_access'])
) {

    header("Location: index.php");
    exit();
}

$records = [
    "MR101" => "Patient Report - General Checkup",
    "MR102" => "Patient Report - Blood Test",
    "MR103" => "Patient Report - Health Review"
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Medical Records</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Secure Medical Records</h2>

    <p class="success">
        Authorized User:
        <?php echo htmlspecialchars($_SESSION['medical_user']); ?>
    </p>

    <div class="result">

        <h3>Available Medical Reports</h3>

        <?php foreach ($records as $id => $report) { ?>

            <p>
                <strong>
                    <?php echo htmlspecialchars($id); ?>
                </strong>
                -
                <?php echo htmlspecialchars($report); ?>
            </p>

        <?php } ?>

    </div>

    <p class="warning">
        Unauthorized users cannot access this page.
    </p>

</div>

</body>
</html>