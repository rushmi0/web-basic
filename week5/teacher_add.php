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

<div class="card text-center" style="padding:15px;">
    <h4>PHP : Insert Data</h4>
</div><br>

<div class="container">
    <form action="teacher_add_p.php" method="POST">
        <div class="form-group">
            <label for="name">First Name:</label>
            <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" required="">
        </div>
        <div class="form-group">
            <label for="phone">Last Name:</label>
            <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" required="">
        </div>
        <div class="form-group">
            <label for="address">Email Address:</label>
            <input type="text" class="form-control" name="address" placeholder="Enter Email" required="">
        </div>
        <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="Submit">
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
