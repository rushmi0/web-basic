<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employees System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>



<?php

$host = "localhost";
$user = "root";
$password = "sql@min_root";
$database = "contact";

$conn = mysqli_connect($host, $user, $password, $database);

$id_number = $_GET['edit'];
$str = "SELECT * FROM teacher WHERE id = '$id_number'";
$obj = mysqli_query($conn, $str);

$row = mysqli_fetch_array($obj);

?>


<div class="card text-center" style="padding:15px;">
    <h4>PHP : Edit Data</h4>
</div><br>

<div class="container">
    <form action="teacher_edit_p.php" method="POST">
        <div class="form-group">
            <label for="name">First Name:</label>
            <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" value="<?=$row['fname'];?>">
        </div>
        <div class="form-group">
            <label for="phone">Last Name:</label>
            <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" value="<?=$row['lname'];?>">
        </div>
        <div class="form-group">
            <label for="address">Email Address:</label>
            <input type="text" class="form-control" name="address" placeholder="Enter Email" value="<?=$row['email'];?>">
        </div>
        <input type="hidden" name="edit_id" value="<?=$row['id']?>"/>
        <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="Submit">
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
