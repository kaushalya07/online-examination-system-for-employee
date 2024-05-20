<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="askqustions.css">
    
</head>
<?php include 'navbar.php';?>
<body>

<div class="addQA">
          <h1>Ask Qusetion</h1><br><br>
        <form action="faq.php" method="post">
        <label for="id">Employee ID:</label>
        <input type="text" id="id" name="id" required><br><br>

        <label for="name">Qusetion:</label>
        <input type="text" id="name" name="name" required><br><br>

        <input type="submit" value="Submit">
        </form>

</div>

    
</body><br><br><br><br><br><br><br><br><br>
<?php include 'footer.php';?>
</html>