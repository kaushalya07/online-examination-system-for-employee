<?php
session_start();
require_once "connect.php";

if(isset($_POST["submit"])){
    $email = $_POST['email'];
    $pawd = $_POST['pwd'];
    
if($_POST["email"] && $_POST["pwd"]) {
$_SESSION["username"] =  $_POST['email'];
}
}


$username = $_POST['email'];
$password = $_POST['pwd'];

$sqlEmployee = "SELECT * FROM employee WHERE Email = '$username' AND Password = '$password'";
$resultEmployee = $conn->query($sqlEmployee);

$sqlProvider = "SELECT * FROM exam_provider WHERE Email = '$username' AND Password = '$password'";
$resultProvider = $conn->query($sqlProvider);

$sqlAdmin = "SELECT * FROM admin WHERE Email = '$username' AND Password = '$password'";
$resultAdmin = $conn->query($sqlAdmin);

$sqlSupportStaff = "SELECT * FROM supportstaff WHERE Email = '$username' AND Password = '$password'";
$resultSupportStaff = $conn->query($sqlSupportStaff);

$sqlSystemAdmin = "SELECT * FROM system_admin WHERE Email = '$username' AND Password = '$password'";
$resultSystemAdmin = $conn->query($sqlSystemAdmin);

$sqlNewEmployee = "SELECT * FROM emp_signup WHERE Email = '$username' AND Password = '$password'";
$resultNewEmployee = $conn->query($sqlNewEmployee);

if ($resultEmployee->num_rows == 1) {
    header("Location: employee/ephome.php");
    echo "Login successful for employee!";
} 
elseif ($resultProvider->num_rows == 1) {
    header("Location: examprovider/ephome.php");
    echo "Login successful for exam provider!";
} 
elseif ($resultAdmin->num_rows == 1) {
    header("Location: Admin/admin.php");
    echo "Login successful for admin!";
} 
elseif ($resultSupportStaff->num_rows == 1) {
    header("Location: supportstaff/sshome.php");
    echo "Login successful for support staff!";
} 
elseif ($resultSystemAdmin->num_rows == 1) {
    header("Location:systemadmin/admin.php");
    echo "Login successful for system admin!";
}

elseif ($resultNewEmployee->num_rows == 1) {
    header("Location: employee/ephome.php");
    echo "Login successful for Employee";

}else {
    echo '<script>alert("Invalid username or password. Please try again!"); window.location.href = "signupnew.php";</script>';
    exit;
}
    
    $conn->close();
    ?>