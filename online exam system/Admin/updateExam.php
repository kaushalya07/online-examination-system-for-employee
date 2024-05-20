<?php
if (isset($_POST['updateExam'])) {
  $newExamLink = $_POST['newExamLink'];
  $selectedExams = explode(",", $_POST['selectedExams']); 

  require_once "../connect.php";

  foreach ($selectedExams as $examID) {
    $sql = "SELECT * FROM exam WHERE ExamID = '$examID'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
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

  header("Location: editmanageexam.php");
  exit;
}
?>




