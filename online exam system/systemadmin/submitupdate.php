<?php
require 'connect.php';

$id = $_GET['id'];
$name = $_POST["name"];
$p_Num = $_POST["phone-number"];
$pass = $_POST["password"];
$email = $_POST["email"];

$sql1 = "UPDATE system_admin SET SystemAdmin_Name = '$name', Password = '$pass', Email = '$email' WHERE SystemAdmin_ID = '$id'";
$sql2 = "UPDATE systemadmin_phoneno SET PhoneNo = '$p_Num' WHERE SystemAdmin_ID = '$id'";

if ($conn->query($sql1) && $conn->query($sql2)) {
    echo "Data updated successfully!";
    header("location: ../signupnew.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
