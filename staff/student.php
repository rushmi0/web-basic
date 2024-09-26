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

include("config.php");

$strKeyword = null;
if (isset($_GET["txtKeyword"])) {
    $strKeyword = $_GET["txtKeyword"];
}

$str = "SELECT * FROM student WHERE fname LIKE '%$strKeyword%'";
$obj = mysqli_query($conn, $str);

include("page/pg.php");
?>


<div class="card text-center" style="padding:15px;">
    <h4>Student System
        <a href="logout.php">log out</a>

    </h4>
</div>
<br>

<div class="container">
    <h4>PHP : Select Data

        <form name="frmSearch" method="GET" action="<?php
        echo $_SERVER['SCRIPT_NAME']; ?>" style="float:right;">
            Keyword :
            <input name="txtKeyword" type="text"
                   id="txtKeyword" value="<?php echo $strKeyword; ?>">
            <input type="submit" value="Search">
        </form>

    </h4>
    <br>


    <table class="table table-hover">
        <thead>
        <tr>
            <th>No.</th>
            <th>Picture</th>
            <th>Fullname</th>
            <th>Nickname</th>
            <th>Midterm</th>
            <th>Final</th>
            <th>Total</th>
            <th>Grade</th>
        </tr>
        </thead>
        <tbody>

        <?php

        $i = ($Page - 1) * $Per_Page;

        while ($result = mysqli_fetch_array($obj)) {
            ?>
            <tr>
                <td><?= ++$i; ?></td>
                <td><img src="<?="admin/".$result['img']; ?>"></td>
                <td><?php echo $result['fname']; ?></td>
                <td><?= $result['nname']; ?></td>
                <td><?= $result['mid_score']; ?></td>
                <td><?= $result['final_score']; ?></td>

                <?php
                 $total = $result['final_score'] + $result['mid_score'];
                 $grade = "F";

                 if ($total >= 80) {
                     $grade = "A";
                 } else if ($total >= 70) {
                     $grade = "B";
                 } else if ($total >= 60) {
                     $grade = "C";
                 } else if ($total >= 50) {
                     $grade = "D";
                 } else {
                     $grade = "F";
                 }

                ?>
                <td><?=$total;?></td>
                <td><?= $grade?></td>
            </tr>
            <?php
        }
        ?>


        </tbody>
    </table>

    <br>

    <?php
    include("page/sh.php");

    ?>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>