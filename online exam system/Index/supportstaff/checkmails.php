<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
  <?php include 'navbar.php';?>

    <button onclick="redirectToGmail()">Check Mail</button>

    <script>
        function redirectToGmail() {
            window.location.href = "https://mail.google.com";
        }
    </script>

  <?php include 'footer.php';?>
</body>


</html>
