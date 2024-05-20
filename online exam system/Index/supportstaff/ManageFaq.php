<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="ManageFaq.css">
</head>
<body>
    <?php include 'navbar.php';?>
    <div class="container-3">
        <div class="box"><div class="text"><a href="">Manage FAQ</a></div></div>
        <div class="box"><div class="text"><a href="bluekite278@gmail.com">Check Mails</a></div></div>
    </div>

    <?php
    require '../connect.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $question = $_POST['question'];
        $answer = $_POST['answer'];

        $sql = "INSERT INTO faq (Question, Answer) VALUES ('$question', '$answer')";

        if ($conn->query($sql)) {
            echo "<script>alert('Records added successfully!');</script>";
            echo "<script>window.location.href = 'aedit.php';</script>";
        } else {
            echo "<script>alert('Error: Could not execute the query.');</script>";
        }
    }
    ?>

    <div class="container-QA">
        <?php
        $sql = "SELECT * FROM faq";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='QA'>";
                echo "<div class='queAns'>";
                echo "<div class='QAbox'>";
                echo "<div class='checkboxstyle'>";
                echo "<label>";
                echo "<input type='checkbox'>";
                echo "</label>";
                echo "</div>";
                echo "<div class='Question'>" . $row["Question"] . "</div>";
                echo "<div class='Answers'>" . $row["Answer"] . "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "No results";
        }
        ?>
    </div>

    <div class="addQA">
        
    <form action="" method="post">
   <center>Question:</center><br>
    <input type="text" id="question" name="question"><br><br>

    <center>Answer:</center><br>
    <input type="text" id="answer" name="answer"><br><br>

    <input type="submit" value="Submit" class="button">
  </form>
        
    </div>

    <?php include 'footer.php';?>
</body>
</html>
