<?php
// Include the database connection file
require_once "connect.php";

// Retrieve form data
$username = $_POST['email'];
$password = $_POST['pwd'];

// Prepare and execute the SQL query to fetch the user with matching credentials from the employee table
$sqlEmployee = "SELECT * FROM employee WHERE Email = '$username' AND Password = '$password'";
$resultEmployee = $conn->query($sqlEmployee);

// Prepare and execute the SQL query to fetch the user with matching credentials from the exam provider table
$sqlProvider = "SELECT * FROM exam_provider WHERE Email = '$username' AND Password = '$password'";
$resultProvider = $conn->query($sqlProvider);

// Prepare and execute the SQL query to fetch the user with matching credentials from the admin table
$sqlAdmin = "SELECT * FROM admin WHERE Email = '$username' AND Password = '$password'";
$resultAdmin = $conn->query($sqlAdmin);

// Prepare and execute the SQL query to fetch the user with matching credentials from the support_staff table
$sqlSupportStaff = "SELECT * FROM supportstaff WHERE Email = '$username' AND Password = '$password'";
$resultSupportStaff = $conn->query($sqlSupportStaff);

// Prepare and execute the SQL query to fetch the user with matching credentials from the system_admin table
$sqlSystemAdmin = "SELECT * FROM system_admin WHERE Email = '$username' AND Password = '$password'";
$resultSystemAdmin = $conn->query($sqlSystemAdmin);

// Prepare and execute the SQL query to fetch the user with matching credentials from the emp_sign table
$sqlNewEmployee = "SELECT * FROM emp_signup WHERE Email = '$username' AND Password = '$password'";
$resultNewEmployee = $conn->query($sqlNewEmployee);

// Check if a row is returned from the employee table (matching employee credentials)
if ($resultEmployee->num_rows == 1) {
    // Login successful for employee
    header("Location: employee/ephome.php");
    echo "Login successful for employee!";
} 
// Check if a row is returned from the exam provider table (matching exam provider credentials)
elseif ($resultProvider->num_rows == 1) {
    // Login successful for exam provider
    header("Location: examprovider/ephome.php");
    echo "Login successful for exam provider!";
} 
// Check if a row is returned from the admin table (matching admin credentials)
elseif ($resultAdmin->num_rows == 1) {
    // Login successful for admin
    header("Location: Admin/admin.php");
    echo "Login successful for admin!";
} 
// Check if a row is returned from the support_staff table (matching support staff credentials)
elseif ($resultSupportStaff->num_rows == 1) {
    // Login successful for support staff
    header("Location: supportstaff/sshome.php");
    echo "Login successful for support staff!";
} 
// Check if a row is returned from the system_admin table (matching system admin credentials)
elseif ($resultSystemAdmin->num_rows == 1) {
    // Login successful for system admin
    header("Location: systemadmin/admin.php");
    echo "Login successful for system admin!";
}

elseif ($resultNewEmployee->num_rows == 1) {
    // Login successful for system admin
    header("Location: employee/ephome.php");
    echo "Login successful for Employee";

}else {
    // Login failed
    echo '<script>alert("Invalid username or password. Please try again!"); window.location.href = "signupnew.php";</script>';
    //header("Location: signupnew.php");
    
}

// Close the database connection
$conn->close();
?>
