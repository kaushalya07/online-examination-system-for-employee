<?php
if (isset($_POST['updateExam'])) {
  // Process update exam form submission
  $newExamLink = $_POST['newExamLink'];
  $selectedExams = explode(",", $_POST['selectedExams']); // Convert selected exams to an array

  // Include the database connection file
  require_once "../connect.php";

  // Update the exams in the database
  foreach ($selectedExams as $examID) {
    // Retrieve the current details of the exam
    $sql = "SELECT * FROM exam WHERE ExamID = '$examID'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // Perform the update operation
      $sql = "UPDATE exam SET ExamLink = '$newExamLink' WHERE ExamID = '$examID'";
      if ($conn->query($sql)) {
        echo <<<HTML
          <script>
            window.onload = function() {
              alert("Exam with ID: $examID updated successfully.");
              window.location.href = "editmanageexam.php";
            };
          </script>
        HTML;
        exit;
      } else {
        echo "Error updating exam with ID: $examID. Error: " . $conn->error . "<br>";
      }
    } else {
      echo "Exam with ID: $examID not found.";
    }
  }

  // Redirect to the exam list page
  header("Location: editmanageexam.php");
  exit;
}
?>




