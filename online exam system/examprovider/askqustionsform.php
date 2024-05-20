<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="askqustions.css">
</head>
<?php include 'navbar.php';?>
<body>
  <br>
    <div class="addQA">
        <h1>Ask Question</h1><br><br>
        <form action="askquestions.php" method="post">
            <label for="id">Employee ID:</label>
            <input type="text" id="id" name="id" required><br><br>

            <label for="question">Question:</label>
            <input type="text" id="question" name="question" required><br><br>
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <br><br><br><br>
    <?php include 'footer.php';?>

</body>
</html>
