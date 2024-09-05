<?php

$host = "localhost";
$user = "root";
$password = "sql@min_root";
$database = "contact";

$conn = new mysqli($host, $user, $password, $database);

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$addr = $_POST['address'];
$id_number = $_POST['edit_id'];

$str = "UPDATE contact.teacher SET fname = '$fname', lname = '$lname', email = '$addr' WHERE id = '$id_number'";

$obj = mysqli_query($conn, $str);
if ($obj) {
    echo 'UP-TO-DATE OK'.'<br>';
    echo '<meta http-equiv="refresh" content="3;URL=teacher.php" />';
} else {
    echo 'UP-TO-DATE FAIL!!!'.'<br>';
    echo '<meta http-equiv="refresh" content="3;URL=teacher.php" />';
}

?>