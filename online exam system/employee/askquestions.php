<?php
require_once 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $employeeID = $_POST['id'];
    $question = $_POST['question'];

    $insertQuestionSQL = "INSERT INTO faq (Question) VALUES ('$question')";
    mysqli_query($conn, $insertQuestionSQL);

        $faqID = mysqli_insert_id($conn);

        $checkEmployeeSQL = "SELECT * FROM employee WHERE EmployeeID = '$employeeID'";
        $result = mysqli_query($conn, $checkEmployeeSQL);
        $employeeExists = mysqli_num_rows($result) > 0;
    
        if ($employeeExists) {
            $insertEmployeeFaqSQL = "INSERT INTO employee_faq (Employee_ID, FAQ_ID) VALUES ('$employeeID', '$faqID')";
            mysqli_query($conn, $insertEmployeeFaqSQL);
        } else {
            $insertNewEmployeeFaqSQL = "INSERT INTO newemployee_faq (Employee_ID, FAQ_ID) VALUES ('$employeeID', '$faqID')";
            mysqli_query($conn, $insertNewEmployeeFaqSQL);
        }


    echo "<script>alert('Records added successfully!');</script>";
            echo "<script>window.location.href = 'faq.php';</script>";
            exit();
        
            
}else {
    echo "<script>alert('Error: Could not execute the query.');</script>";
}
?>
