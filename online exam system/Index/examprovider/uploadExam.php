<?php
// Include the database connection file
require_once "../connect.php";

$examID = $_POST['examID'];
$link = $_POST['link'];

// Check if the exam ID already exists
$existingExamQuery = "SELECT ExamID FROM exam WHERE ExamID = '$examID'";
$existingExamResult = $conn->query($existingExamQuery);

if ($existingExamResult->num_rows > 0) {
    echo "<script>alert('Exam already exists!');</script>";
    // Redirect the user to the edit page
    echo "<script>window.location.href = 'edituploadexam.php';</script>";
} else {
    // Insert the data into the database
    $sql = "INSERT INTO exam (ExamID, ExamLink) VALUES ('$examID', '$link')";

    if ($conn->query($sql)) {
        echo "<script>alert('Records added successfully!');</script>";
        // Redirect the user to the edit page
        echo "<script>window.location.href = 'edit.php';</script>";
    } else {
        echo "<script>alert('Error: Could not execute the query.');</script>";
    }
}
?>
