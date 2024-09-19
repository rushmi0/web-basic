<?php

$fullname   = $_POST['fullname'];
$nname      = $_POST['nname'];
$mid_score  = $_POST['mid_score'];
$final_score = $_POST['final_score'];
$editID = $_POST['editID'];

//connet DB
include("../config.php");

//Query
$str = "update student set fname = '$fullname', nname = '$nname ', 
        mid_score = '$mid_score', final_score = '$final_score' 
        where id = '$editID' ";
$obj = mysqli_query($conn,$str);

if($obj){
    echo "OK!..";
    echo "<meta http-equiv='refresh' content='3;URL=ST_select.php' />";
}else{
    echo "No No No!..";
    echo "<meta http-equiv='refresh' content='3;URL=ST_select.php' />";
}


?>