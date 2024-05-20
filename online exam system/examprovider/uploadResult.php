<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="upload.css" />
    <title>Upload Result</title>
  </head>
  <body>
    <?php include 'navbar.php';?>
    <div class="main">
      <div class="card">
        <div class="top">
          <div class="box"><a href="editmanageexam.php">Manage Exams</a></div>
          <div class="box1"><a href="edituploadexam.php">Upload Exams</a></div>
          <div class="box1"><a href="#">Upload Result</a></div>
        </div>

        <div class="middle">
          <form action="result.php" method="post" enctype="multipart/form-data">
            <label for="examID">Exam ID:</label>
            <input type="text" id="examID" name="examID" required><br><br>

            <label for="file">Select File:</label>
            <input type="file" id="file" name="file" required><br><br>

            <input type="submit" value="Upload">
          </form>
        </div>
      </div>
    </div>
    <?php include 'footer.php';?>
  </body>
</html>
