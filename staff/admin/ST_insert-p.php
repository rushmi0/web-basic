<?php

$fullname   = $_POST['fullname'];
$nname      = $_POST['nname'];
$mid_score  = $_POST['mid_score'];
$final_score = $_POST['final_score'];

//connet DB
include("../config.php");

//Query
$str = "insert into student (fname,nname,mid_score,final_score) 
        values('$fullname','$nname','$mid_score','$final_score')";
$obj = mysqli_query($conn,$str);

if($obj){
    echo "OK!..";
    echo "<meta http-equiv='refresh' content='3;URL=ST_select.php' />";
}else{
    echo "No No No!..";
    echo "<meta http-equiv='refresh' content='3;URL=ST_insert.php' />";
}


?>