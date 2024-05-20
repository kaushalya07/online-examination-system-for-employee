<?php
require_once "../connect.php";

$examID = $_POST['examID'];
$link = $_POST['link'];

$existingExamQuery = "SELECT ExamID FROM exam WHERE ExamID = '$examID'";
$existingExamResult = $conn->query($existingExamQuery);

if ($existingExamResult->num_rows > 0) {
    echo "<script>alert('Exam already exists!');</script>";
    echo "<script>window.location.href = 'edituploadexam.php';</script>";
} else {
    $sql = "INSERT INTO exam (ExamID, ExamLink) VALUES ('$examID', '$link')";

    if ($conn->query($sql)) {
        echo "<script>alert('Records added successfully!');</script>";
        echo "<script>window.location.href = 'edit.php';</script>";
    } else {
        echo "<script>alert('Error: Could not execute the query.');</script>";
    }
}
?>
