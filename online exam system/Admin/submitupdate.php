<?php
require 'connect.php';

$id = $_GET['id'];
$name = $_POST["name"];
$pass = $_POST["password"];
$email = $_POST["email"];

$sql1 = "UPDATE admin SET Admin_Name = '$name', password = '$pass', email = '$email' WHERE Admin_ID = '$id'";

if ($conn->query($sql1) ) {
    echo "Data updated successfully!";
    header("location: ../signupnew.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
