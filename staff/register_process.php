<?php
// เชื่อมต่อฐานข้อมูล
include("config.php");

// รับข้อมูลจากฟอร์ม
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$username = $_POST['username'];
$password = md5($_POST['password']);

// บันทึกข้อมูลลงในฐานข้อมูล
$sql = "INSERT INTO customer (first_name, last_name, email, tel, username, password)
        VALUES ('$first_name', '$last_name', '$email', '$tel', '$username', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Registration successful!";
    header("Location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
