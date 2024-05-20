<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="update.css" />
  <title>Update Exam Details</title>
</head>
<body>
  <?php include 'navbar.php';?>
  <div class="main">
    <h2>Update Exam Details</h2><br><br><br>
    <form action="updateExam.php" method="post">
      <div class="form-group">
        <label for="newExamLink">New Exam Link:</label><br>
        <input type="text" id="newExamLink" name="newExamLink" />
      </div>
      <div class="form-group"><br><br>
        <input type="submit" name="updateExam" value="Update" />
      </div>
      <div class="form-group">
        <input type="button" value="Go Back" onclick="history.back()" />
      </div>

      <!-- Add hidden input field for selected exams -->
      <?php
        if (isset($_POST['selectedExams'])) {
          $selectedExams = $_POST['selectedExams'];
          echo '<input type="hidden" name="selectedExams" value="' . implode(",", $selectedExams) . '" />';
        }
      ?>
    </form>
  </div>

  <?php include 'footer.php';?>
</body>
</html>
