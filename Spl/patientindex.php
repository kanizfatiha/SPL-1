<?php
session_start();
include("connection.php");
include("functions.php");

$patient_data= check_patientlogin($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>healU</title>
</head>
<body>
    <a href = "homepage.html">Logout</a>
    <h1>This is the index page</h1>
    <br>
    Hello, patient.
</body>
</html>