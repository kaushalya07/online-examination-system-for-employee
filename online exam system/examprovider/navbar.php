<?php 
require '../connect.php';


session_start();


$key = $_SESSION["username"];

?>
<!DOCTYPE html>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="navbar.css" />
    <link rel="stylesheet" type="text/css" href="footer.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
   
  </head>
  <body>
    <div class="top-row">
      <nav class="nav">
        <div class="box1">
          <img src="../Images/bluekite.png" height="35px" style="top:10px">
          <p> BLUEKITE</p>
        </div>
        <div class="box2">
          <a href="Studentprofile.php"><?php echo $key?></a>
          <a href="../logout.php">Logout</a>

        </div>
      </nav>

      <nav class="nav_s">
        <ul class="main-nav">
          <li><a href="ephome.php">Home</a></li>
          <li><a href="aprogramme.php">Programme</a></li>
          <li><a href="anotice.php">Notice</a></li>
          <li><a href="edit.php">Edit</a></li>
          <li><a href="aabout.php">About</a></li>
          
        </ul>
      </nav>
    </div>

 


       
  </body>
</html>
