<?php

$host = "localhost";
$user = "root";
$password = "sql@min_root";
$database = "contact";

$conn = mysqli_connect($host, $user, $password, $database);

$id_number = $_GET['del'];

$str = "DELETE FROM teacher WHERE id = '$id_number'";

$obj = mysqli_query($conn, $str);
if ($obj) {
    echo 'DELETED OK'.'<br>';
    echo '<meta http-equiv="refresh" content="3;URL=teacher.php" />';
} else {
    echo 'DELETED FAIL!!!'.'<br>';
    echo '<meta http-equiv="refresh" content="3;URL=teacher.php" />';
}

?>