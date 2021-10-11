<?php
session_start();
include("connection.php");
include("functions.php");



$doctor_data= check_doctorlogin($con);

   
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
    <a href = "logout.php">Logout</a>
    <h1>This is the index page</h1>
    <br>
    Hello, Welcome.
</body>
</html>