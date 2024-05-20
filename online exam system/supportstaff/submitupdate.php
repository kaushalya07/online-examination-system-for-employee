<?php
require 'connect.php';

$id = $_GET['id'];
$name = $_POST["name"];
$p_Num = $_POST["phone-number"];
$pass = $_POST["password"];
$email = $_POST["email"];

$sql1 = "UPDATE supportstaff SET SupportStaff_Name = '$name', Password = '$pass', Email = '$email' WHERE SupportStaff_ID = '$id'";
$sql2 = "UPDATE supportstaff_phoneno SET PhoneNo = '$p_Num' WHERE SupportStaff_ID = '$id'";

if ($conn->query($sql1) && $conn->query($sql2)) {
    echo "Data updated successfully!";
    header("location: ../signupnew.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
