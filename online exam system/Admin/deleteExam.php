<?php
require_once "../connect.php";

if (isset($_POST["selectedExams"]) && is_array($_POST["selectedExams"])) {
    $selectedExams = $_POST["selectedExams"];

    if (!empty($selectedExams)) {
        echo '<script>
                var confirmed = confirm("Are you sure you want to delete the selected exams?\n\n' . implode(", ", $selectedExams) . '");
                if (confirmed) {
                    window.location.href = "deleteExam.php?examIDs=' . implode(",", $selectedExams) . '&confirmed=true";
                } else {
                    window.location.href = "editmanageexam.php";
                }
              </script>';
    } else {
        
    }
} else {
    
}

if (isset($_GET["examIDs"]) && isset($_GET["confirmed"]) && $_GET["confirmed"] === "true") {
    $examIDs = $_GET["examIDs"];
    $examIDsArray = explode(",", $examIDs);
    
    if (!empty($examIDsArray)) {
        foreach ($examIDsArray as $examID) {
            $deleteEmployeeExamSql = "DELETE FROM employee_exam WHERE Exam_ID = '$examID'";
            if ($conn->query($deleteEmployeeExamSql)) {
                echo "Associated employee exams for Exam ID: $examID deleted successfully.<br>";
            } else {
                echo "Error deleting associated employee exams for Exam ID: $examID. Error: " . $conn->error . "<br>";
            }
            $deleteAdminSql = "DELETE FROM exam_admin WHERE Exam_ID = '$examID'";
            if ($conn->query($deleteAdminSql)) {
            echo "Associated exam admins for Exam ID: $examID deleted successfully.<br>";
            } else {
            echo "Error deleting associated exam admins for Exam ID: $examID. Error: " . $conn->error . "<br>";
            }

            $deleteProviderResultSql = "DELETE FROM examprovider_result WHERE Exam_ID = '$examID'";
            if ($conn->query($deleteProviderResultSql)) {
                echo "Associated examprovider results for Exam ID: $examID deleted successfully.<br>";
            } else {
                echo "Error deleting associated examprovider results for Exam ID: $examID. Error: " . $conn->error . "<br>";
            }

            $deleteResultSql = "DELETE FROM exam_result WHERE Exam_ID = '$examID'";
            if ($conn->query($deleteResultSql)) {
                echo "Associated exam results for Exam ID: $examID deleted successfully.<br>";
            } else {
                echo "Error deleting associated exam results for Exam ID: $examID. Error: " . $conn->error . "<br>";
            }

            $deleteExamSql = "DELETE FROM exam WHERE ExamID = '$examID'";
            if ($conn->query($deleteExamSql)) {
                echo "Exam with ID: $examID deleted successfully.<br>";
            } else {
                echo "Error deleting exam with ID: $examID. Error: " . $conn->error . "<br>";
            }
        }
    } else {
        echo "No exams selected for deletion.";
    }

    header("Location: editmanageexam.php");
    exit;
}

?>
