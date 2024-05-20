<?php
require_once "../connect.php";


$id = $_POST['id'];
$Name = $_POST['Name'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "UPDATE supportstaff SET SupportStaff_Name='$Name', Password='$password', Email='$email' WHERE SupportStaff_ID='$id'";

if (mysqli_query($conn, $sql)) {
    echo "<script>showAlert('Data updated successfully.');</script>";
    echo "<script>window.location.href = 'edit.php';</script>";
} else {
    echo "<script>showAlert('Failed to update data.');</script>";
    echo "<script>window.location.href = 'edituser.php';</script>";
}

mysqli_close($conn);
?>
