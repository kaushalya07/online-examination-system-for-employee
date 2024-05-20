<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="ManageFaq.css">
</head>
<body>
    <?php include 'navbar.php';?>
    <div class="container-3">
        <div class="box"><div class="text"><a href="">Manage FAQ</a></div></div>
        <div class="box"><div class="text"><a href="mailto:bluekite278@gmail.com">Check Mails</a></div></div>
    </div>

    <form action="deletefaq.php" method="post" id="deleteForm">
        <div class="container-QA">
            <?php
            require_once "connect.php";
            $sql = "SELECT * FROM faq";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='QA'>";
                    echo "<div class='queAns'>";
                    echo "<div class='QAbox'>";
                    echo "<div class='checkboxstyle'>";
                    echo "<label>";
                    echo "<input type='checkbox' name='faq[]' value='" . $row["FAQID"] . "'>";
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

        <div class="delete-button-container">
            <button type="submit" id="deleteButton" class="delete-button" disabled>Delete Selected FAQs</button>
        </div>
    </form>

    <div class="addQA">
        <form action="submitfaq.php" method="post">
            <center>Question:</center><br>
            <input type="text" id="question" name="question" required=""><br><br>

            <center>Answer:</center><br>
            <input type="text" id="answer" name="answer" required=""><br><br>

            <input type="submit" value="Submit" class="button">
        </form>
    </div>

    <?php include 'footer.php';?>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const checkboxes = document.querySelectorAll('.checkboxstyle input[type="checkbox"]');
        const deleteButton = document.getElementById('deleteButton');
        const deleteForm = document.getElementById('deleteForm');

        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                const checkedCheckboxes = document.querySelectorAll('.checkboxstyle input[type="checkbox"]:checked');
                deleteButton.disabled = checkedCheckboxes.length === 0;
            });
        });

        deleteButton.addEventListener('click', function(e) {
            if (deleteButton.disabled) {
                e.preventDefault(); 
            } else {
                if (!confirm('Are you sure you want to delete the selected FAQs?')) {
                    e.preventDefault(); 
                }
            }
        });
    });
</script>

</body>
</html>
