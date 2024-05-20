<?php
require_once "../connect.php";

$id = $_POST['id'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "UPDATE exam_provider SET First_Name='$firstName', Last_Name='$lastName', Password='$password', Email='$email' WHERE ExamProvider_ID='$id'";

if (mysqli_query($conn, $sql)) {
    echo "<script>showAlert('Data updated successfully.');</script>";
    echo "<script>window.location.href = 'edit.php';</script>";
} else {
    echo "<script>showAlert('Failed to update data.');</script>";
    echo "<script>window.location.href = 'edituser.php';</script>";
}

mysqli_close($conn);
?>
