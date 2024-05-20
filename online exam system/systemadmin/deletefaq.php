<?php
require_once "connect.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["faq"])) {
    $faqIds = $_POST["faq"];
    
    $supportStaffDeleteSql = "DELETE FROM faq_supportstaff WHERE FAQ_ID IN (". implode(",", $faqIds) .")";
    if ($conn->query($supportStaffDeleteSql) === TRUE) {
        $employeeDeleteSql = "DELETE FROM employee_faq WHERE FAQ_ID IN (". implode(",", $faqIds) .")";
        if ($conn->query($employeeDeleteSql) === TRUE) {
            $newemployeeDeleteSql = "DELETE FROM newemployee_faq WHERE FAQ_ID IN (". implode(",", $faqIds) .")";
            if ($conn->query($newemployeeDeleteSql) === TRUE) {
                $faqDeleteSql = "DELETE FROM faq WHERE FAQID IN (". implode(",", $faqIds) .")";
                if ($conn->query($faqDeleteSql) === TRUE) {
                    echo "<script>alert('FAQ deleted successfully.');</script>";
                    echo "<script>window.location.href = 'managefaq.php';</script>";
                } else {
                    echo "<script>alert('Error deleting FAQs: " . $conn->error . "');</script>";
                    echo "<script>window.location.href = 'managefaq.php';</script>";
                }
            } else {
                echo "<script>alert('Error deleting related records in newemployee table: " . $conn->error . "');</script>";
                echo "<script>window.location.href = 'managefaq.php';</script>";
            }
        } else {
            echo "<script>alert('Error deleting related records in employee table: " . $conn->error . "');</script>";
            echo "<script>window.location.href = 'managefaq.php';</script>";
        }
    } else {
        echo "<script>alert('Error deleting related records in supportstaff table: " . $conn->error . "');</script>";
        echo "<script>window.location.href = 'managefaq.php';</script>";
    }
} else {
    echo "<script>alert('No FAQs selected for deletion.');</script>";
    echo "<script>window.location.href = 'managefaq.php';</script>";
}

$conn->close();
?>

