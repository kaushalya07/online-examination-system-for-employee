<link rel="stylesheet" type="text/css" href="Enrollcss.css">

<?php
include 'navbar.php';
require_once "connect.php"; 


$sql = "SELECT * FROM exam";
$result = mysqli_query($conn, $sql);
?>

<div class="attemptExam">
    <?php
    
    if (mysqli_num_rows($result) > 0) {
        
        while ($row = mysqli_fetch_assoc($result)) {
            $examCode = $row['ExamID'];
            $examLink = $row['ExamLink'];
            ?>
            <div class="BK101">
                <p><?php echo $examCode; ?></p><br>
                <a href="<?php echo $examLink; ?>" target="_blank">Attempt Exam</a>
            </div>
            <?php
        }
    } else {
        echo "No exams found.";
    }
    ?>
</div>

<?php include 'footer.php'; ?>

  
