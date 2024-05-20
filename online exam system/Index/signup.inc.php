<?php
// Include the database connection file
require_once "connect.php";

// Retrieve form data
$firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
$lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
$employeeID = isset($_POST['employeeID']) ? $_POST['employeeID'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phoneNumber = isset($_POST['phoneNumber']) ? intval($_POST['phoneNumber']) : '0';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$confirmPassword = isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : '';

// Check if the passwords match
if ($password !== $confirmPassword) {
    echo '<script>alert("Password does not match. Please try again"); window.location.href = "signupnew.php";</script>';
;
    exit; // Stop further execution
}

//check email has already exist
$stmt = $conn->prepare("SELECT * FROM emp_signup WHERE Email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    // Email already exists
    echo '<script>alert("Email already exists. Please use a different email."); window.location.href = "signupnew.php";</script>';
    exit; // Stop further execution
}

// Check if the Employee ID has the correct format
if (!preg_match('/^EM[0-9]{6}$/', $employeeID)) {
    echo '<script>alert("Invalid Employee ID. Please use the format EM****** (e.g., EM123456)."); window.location.href = "signupnew.php";</script>';
    exit; // Stop further execution
}

// Prepare and execute the SQL query to insert data into the emp_signup table
$stmt = $conn->prepare("INSERT INTO emp_signup (EmpID, Firstname, Lastname, Email, PhoneNumber, Password) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssis", $employeeID, $firstName, $lastName,  $email, $phoneNumber, $password);

if ($stmt->execute()) {
    // Data inserted successfully
    echo '<script>alert("Account created successfully. Log in to your account."); window.location.href = "signupnew.php";</script>';
} else {
    // Error occurred while inserting data
    echo "Error: " . $stmt->error;
}

// Close the statement and database connection
$stmt->close();
$conn->close();

?>
