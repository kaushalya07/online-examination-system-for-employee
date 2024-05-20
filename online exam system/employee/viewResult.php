<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
<?php include 'navbar.php';?>
<br>

<center><div class="middle">
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $targetDir = "../uploads/";
        $targetFile = $targetDir . basename($_FILES["file"]["name"]);
        $examID = $_POST["examID"];
        
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            echo "<h2>Exam ID: $examID</h2>";
        } else {
            echo "<p>Error while uploading the file.</p>";
        }
    }
    
    $uploadDir = "../uploads/";
    $files = scandir($uploadDir);
    
    echo '<div class="results-container">';
    
    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
          $examID = explode('_', $file)[0];
            $filepath = $uploadDir . $file;

            echo "<div class='result-box'>";
            echo "<h3>Exam ID: $examID</h3>";
            echo "<img src='image/paper.png' alt='Result Image' width='75px' height='75px'>";
            echo "<p><a href='$filepath' target='_blank'>View Result</a></p>";
            echo "</div>";
            echo "<br>";
    
    echo '</div>'; 
  }
}
    ?>
</div>
<center>
  <br>
<?php include 'footer.php';?>
</body>
</html>
