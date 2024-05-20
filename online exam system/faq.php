<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="faq.css" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
</head>
<body>
    <?php include 'navbar.php';?>
    
    <div class="container-QA">
        <?php
        require_once "connect.php";
        $sql = "SELECT * FROM faq";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $question = $row["Question"];
                $answer = $row["Answer"];

                echo "<div class='QA'>";
                echo "<div class='queAns'>";
                echo "<div class='faq'>";
                echo "<button class='accordion'>";
                echo $question . "<i class='fas fa-chevron-down'></i>";
                echo "</button>";
                echo "<div class='pannel'>";
                echo "<p>";
                echo $answer;
                echo "</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "No FAQs found.";
        }
        ?>
    </div>

    <div class="ask-question-container">
        <input type="button" value="Ask Question" class="ask-question-button" onclick="window.location.href='signupnew.php'">
    </div>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                this.parentElement.classList.toggle("active");
                var panel = this.nextElementSibling;

                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>

    <?php include 'footer.php';?>
</body>
</html>
