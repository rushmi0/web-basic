<?php
session_start();
include("config.php");

$userAd = mysqli_real_escape_string($conn,$_POST['userAd']);
$passAd = md5($_POST['passAd']);

$str = "SELECT * FROM admin WHERE a_user = '$userAd' AND a_pass = '$passAd'";
$obj = mysqli_query($conn, $str);

if($obj && mysqli_num_rows($obj) == 1) {
    // Login Successful
    echo "Welcome " . $userAd . "<br>";
    $_SESSION['user'] = $userAd;
    echo "<meta http-equiv='refresh' content='1;URL=admin/ST_select.php'>";
} else {
    //Login failed
    echo 'Uername and/or password incorrect.' . "<br>";
    echo '<meta http-equiv="refresh" content="1;URL=login.php"> />';
}
?>