<?php
require_once "../connect.php";

$employeeID = $_POST['id'] ?? '';
$firstName = $_POST['firstName'] ?? '';
$lastName = $_POST['lastName'] ?? '';
$password = $_POST['password'] ?? '';
$email = $_POST['email'] ?? '';

$checkEmployeeQuery = "SELECT * FROM employee WHERE EmployeeID = '$employeeID'";
$resultEmployeeCheck = mysqli_query($conn, $checkEmployeeQuery);

$checkEmployeesignupQuery = "SELECT * FROM emp_signup WHERE EmpID = '$employeeID'";
$resultEmployeesignupCheck = mysqli_query($conn, $checkEmployeesignupQuery);

if (mysqli_num_rows($resultEmployeeCheck) > 0) {
    $updateEmployeeQuery = "UPDATE employee SET First_Name = '$firstName', Last_Name = '$lastName', Password = '$password', Email = '$email' WHERE EmployeeID = '$employeeID'";
    $resultEmployee = mysqli_query($conn, $updateEmployeeQuery);

    if ($resultEmployee) {
        echo "<script>showAlert('Data updated successfully in the employee table.');</script>";
        echo "<script>window.location.href = 'edit.php';</script>";
    } else {
        echo "<script>showAlert('Failed to update data in the employee table.');</script>";
        echo "<script>window.location.href = 'edituser.php';</script>";
    }
} else if (mysqli_num_rows($resultEmployeesignupCheck) > 0) {
    $updateEmpSignupQuery = "UPDATE emp_signup SET Firstname = '$firstName', Lastname = '$lastName', Password = '$password', Email = '$email' WHERE EmpID = '$employeeID'";
    $resultEmpSignup = mysqli_query($conn, $updateEmpSignupQuery);

    if ($resultEmpSignup) {
        echo "<script>showAlert('Data updated successfully in the emp_signup table.');</script>";
        echo "<script>window.location.href = 'edit.php';</script>";
    } else {
        echo "<script>showAlert('Failed to update data in the emp_signup table.');</script>";
        echo "<script>window.location.href = 'edituser.php';</script>";
    }
}

mysqli_close($conn);
?>

<script>
function showAlert(message) {
    alert(message);
}
</script>
