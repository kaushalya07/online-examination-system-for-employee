<?php
require 'connect.php';

$id = $_GET['id'];
$f_Name = $_POST["first-name"];
$l_Name = $_POST["last-name"];
$p_Num = $_POST["phone-number"];
$pass = $_POST["password"];
$email = $_POST["email"];

$sql1 = "UPDATE exam_provider SET First_Name = '$f_Name', Last_Name = '$l_Name', Password = '$pass', Email = '$email' WHERE ExamProvider_ID = '$id'";
$sql2 = "UPDATE examprovider_phoneno SET PhoneNo = '$p_Num' WHERE ExamProvider_ID = '$id'";

if ($conn->query($sql1) && $conn->query($sql2)) {
    echo "Data updated successfully!";
    header("location: ../signupnew.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
