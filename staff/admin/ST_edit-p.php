<?php

$fullname = $_POST['fullname'];
$nname = $_POST['nname'];
$mid_score = $_POST['mid_score'];
$final_score = $_POST['final_score'];
$editID = $_POST['editID'];
$dst_file = $_POST['pic'];

if (isset($_FILES['fileupload'])) {
    $file_name = $_FILES['fileupload']['name'];
    $file_src = $_FILES['fileupload']['tmp_name'];

    $file_name = time() . "_" . $file_name;
    $dst_file = "img/" . $file_name;

    if (move_uploaded_file($file_src, $dst_file)) {
        echo "uploaded successfully.";

    } else {
        echo "Failed to upload this file.";
    }
} else {
    echo "No file uploaded.";
}

//connet DB
include("../config.php");

//Query
$str = "update student set fname = '$fullname', nname = '$nname ', 
        mid_score = '$mid_score', final_score = '$final_score', img = '$dst_file' 
        where id = '$editID' ";
$obj = mysqli_query($conn, $str);

if ($obj) {
    echo "OK!..";
    echo "<meta http-equiv='refresh' content='3;URL=ST_select.php' />";
} else {
    echo "No No No!..";
    echo "<meta http-equiv='refresh' content='3;URL=ST_select.php' />";
}


?>