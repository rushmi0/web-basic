<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employees System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<?php
$host = "localhost";
$user = "root";
$password = "sql@min_root";
$database = "contact";

$conn = new mysqli($host, $user, $password, $database);

$str = "SELECT * FROM teacher";
$obj = mysqli_query($conn, $str);
?>

<div class="card text-center" style="padding:15px;">
    <h4>Search Employees System</h4>
</div>
<br>

<div class="container">
    <form name="frmSearch" method="post" action="#" style="float:right;">
        Keyword :
        <input name="txtKeyword" type="text" id="txtKeyword" value="#">
        <input type="submit" value="Search">
    </form>
    <br><br>

    <table class="table table-hover">

        <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        </thead>
        <?php
        $t_id = 0;
        while ($row = mysqli_fetch_assoc($obj)) {
            $t_id += 1;
            $t_fname = $row["fname"];
            $t_lname = $row["lname"];
            $t_email = $row["email"];

            ?>
            <tbody>
            <tr>
                <td><?= $t_id ?></td>
                <td><?= $t_fname ?></td>
                <td><?= $t_lname ?></td>
                <td><?= $t_email ?></td>
                <td>
                    <a href="#" style="color:green">
                        <i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp
                    <a href="#" style="color:red" onclick="return confirm('Are you sure want to delete this record')">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
    <br><a href='#' class='btn btn-primary' id='download_link'>Download</a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
