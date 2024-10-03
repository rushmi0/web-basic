<?php
session_start();
include("config.php");

// รับข้อมูลจากฟอร์ม
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// บันทึกข้อมูลลงในฐานข้อมูล
$sql = "INSERT INTO all_contact (name, email, message)
        VALUES ('$name', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
    echo '<meta http-equiv="refresh" content="2;URL=notic.php">';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
contact_process.php