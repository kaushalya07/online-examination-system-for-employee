<!DOCTYPE html>
<html>
<head>
<script>
function showMessage(message, isError) {
    if (isError) {
        alert("Error: " + message);
    } else {
        alert(message);
        window.location.href = "uploadresult.php"; 
    }
}
</script>
</head>
<body>
<?php
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
if(isset($_FILES["file"])) {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        $filename = basename($_FILES["file"]["name"]);
        echo '<script>showMessage("Result uploaded successfully.", false);</script>';
        
    } else {
        echo "Error while uploading your file.";
        echo '<script>showMessage("Error uploading result. Please try again.", true);</script>';
    }
} else {
    echo "File not available.";
    echo '<script>showMessage("File not available.", true);</script>';
}
?>
</body>
</html>

