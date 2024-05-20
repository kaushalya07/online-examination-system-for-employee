<?php
require_once "connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $question = $_POST['question'] ?? '';
    $answer = $_POST['answer'] ?? '';


    $sql = "INSERT INTO faq (Question, Answer) VALUES ('$question', '$answer')";
    if ($conn->query($sql) === true) {
        echo "<script>alert('Records added successfully!');</script>";
            echo "<script>window.location.href = 'ManageFaq.php';</script>";
        } else {
            echo "<script>alert('Error: Could not execute the query.');</script>";
    }
} else {
    echo "Invalid request method.";
}
?>
