<?php

$host = "localhost";
$user = "root";
$password = "sql@min_root";
$database = "contact";

$conn = new mysqli($host, $user, $password, $database);

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$addr = $_POST['address'];

$str = "INSERT INTO contact.teacher(
    fname, lname, email
) VALUES (
    '$fname', '$lname', '$addr'
)";

$obj = mysqli_query($conn, $str);
if ($obj) {
    echo 'INSERT OK'.'<br>';
    echo '<meta http-equiv="refresh" content="3;URL=teacher.php" />';
} else {
    echo 'INSERT FAIL!!!'.'<br>';
    echo '<meta http-equiv="refresh" content="3;URL=teacher_add.php" />';
}

?>