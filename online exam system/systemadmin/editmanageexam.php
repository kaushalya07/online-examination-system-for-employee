<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="manage.css" />
    <title>Document</title>
    <script>
      function enableButtons() {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        var updateButton = document.getElementById('updateButton');
        var deleteButton = document.getElementById('deleteButton');
        var checkedCount = 0;

        for (var i = 0; i < checkboxes.length; i++) {
          if (checkboxes[i].checked) {
            checkedCount++;
          }
        }

        updateButton.disabled = checkedCount !== 1;
        deleteButton.disabled = checkedCount === 0;
      }

      function validateUpdate() {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        var checkedCount = 0;

        for (var i = 0; i < checkboxes.length; i++) {
          if (checkboxes[i].checked) {
            checkedCount++;
          }
        }

        if (checkedCount !== 1) {
          alert("Please select only one exam to update.");
          return false; 
        }
      }
    </script>
  </head>
  <body>
    <?php include 'navbar.php';?>
    <div class="main">
      <div class="top">
        <div class="box1"><a href="editmanageexam.php">Manage Exams</a></div>
        <div class="box"><a href="edituploadexam.php">Upload Exams</a></div>
      </div>

      <div class="middle">
        <form action="updateExam.php" method="post">
          <div class="card">
            <?php
              
              require_once "../connect.php";

              
              $sql = "SELECT * FROM exam";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                $counter = 0; 
                echo '<div class="row">'; 
                while ($row = $result->fetch_assoc()) {
                  $examID = $row['ExamID'];
                  $examLink = $row['ExamLink'];

                  if ($counter > 0 && $counter % 3 == 0) {
                    echo '</div><div class="row">'; 
                  }
            ?>
                  <div class="file">
                    <img src="image/paper.png" width="75px" height="75px" />
                    <div class="text">
                      <input type="checkbox" name="selectedExams[]" value="<?php echo $examID; ?>" onchange="enableButtons()" />
                      <?php echo $examID; ?>
                    </div>
                  </div>
            <?php
                  $counter++;
                }
                echo '</div>';
              } else {
                echo "No exams found.";
              }
            ?>
          </div>
          <div class="button">
            <input id="updateButton" type="submit" formaction="updateExamform.php" name="update" value="Update" onclick="return validateUpdate();" disabled />
            <input id="deleteButton" type="submit" formaction="deleteExam.php" name="delete" value="Delete" disabled />
          </div>
        </form>
      </div>
    </div>
    <br><br>

    <?php include 'footer.php';?>
  </body>
</html>





