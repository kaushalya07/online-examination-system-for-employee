<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="upload.css" />
    <title>Document</title>
  </head>
  <body>


  <?php include 'navbar.php';?>
    <div class="main">
      <div class="card">
        <div class="top">
          <div class="box"><a href="editmanageexam.php">Manage Exams</a></div>
          <div class="box1"><a href="edituploadexam.php">Upload Exams</a></div>
          <div class="box1"><a href="uploadResult.php">Upload Result</a></div>
        </div>

        <div class="middle">
          <form method="post" action="uploadExam.php">
          Exam ID:<br>
          <input class="id" type="text" name="examID" required=""><br><br>
          Link :<br>
          <input class="link" type="text" name="link" required=""><br>
        </div>
      </div>
      <div class="button">
        <input type="submit" value="Submit" >
      </div>
    </div>
</form>
<br>

    <?php include 'footer.php';?>
  </body>
</html>
