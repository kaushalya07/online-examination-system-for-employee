<?php
require_once "connect.php";

$firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
$lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
$employeeID = isset($_POST['employeeID']) ? $_POST['employeeID'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phoneNumber = isset($_POST['phoneNumber']) ? intval($_POST['phoneNumber']) : '0';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$confirmPassword = isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : '';

if ($password !== $confirmPassword) {
    echo '<script>alert("Password does not match. Please try again"); window.location.href = "signupnew.php";</script>';
;
    exit; 
}

$stmt = $conn->prepare("SELECT * FROM emp_signup WHERE Email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    echo '<script>alert("Email already exists. Please use a different email."); window.location.href = "signupnew.php";</script>';
    exit; 
}

if (!preg_match('/^EM[0-9]{6}$/', $employeeID)) {
    echo '<script>alert("Invalid Employee ID. Please use the format EM**** (e.g., EM123456)."); window.location.href = "signupnew.php";</script>';
    exit; 
}
$stmt = $conn->prepare("SELECT * FROM emp_signup WHERE EmpID = ?");
$stmt->bind_param("s", $employeeID);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0)
{
    echo '<script>alert("Employee ID already exists. Please use a different ID."); window.location.href = "signupnew.php";</script>';
    exit;
}

$stmt = $conn->prepare("INSERT INTO emp_signup (EmpID, Firstname, Lastname, Email, PhoneNumber, Password) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssis", $employeeID, $firstName, $lastName,  $email, $phoneNumber, $password);

if ($stmt->execute()) {
    echo '<script>alert("Account created successfully. Log in to your account."); window.location.href = "signupnew.php";</script>';
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>