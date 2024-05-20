<?php
require 'connect.php';

$id = $_GET['id'];
$f_Name = $_POST["first-name"];
$l_Name = $_POST["last-name"];
$p_Num = $_POST["phone-number"];
$pass = $_POST["password"];
$email = $_POST["email"];
// Update the emp_signup table with the new values
$sql = "UPDATE emp_signup SET Firstname = '$f_Name', Lastname = '$l_Name', PhoneNumber = '$p_Num', Password = '$pass', Email = '$email' WHERE EmpID = '$id'";
// Update the employee table with the new values
$sql1 = "UPDATE employee SET First_Name = '$f_Name', Last_Name = '$l_Name', Password = '$pass', Email = '$email' WHERE EmployeeID = '$id'";
// Update the employee_phoneno table with the new phone number
$sql2 = "UPDATE employee_phoneno SET PhoneNo = '$p_Num' WHERE Employee_ID = '$id'";

// Execute the update queries
if ($conn->query($sql) && $conn->query($sql1) && $conn->query($sql2)) {
    echo "Data updated successfully!";
    header("location: ../signupnew.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
