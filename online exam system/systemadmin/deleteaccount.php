<?php 
require 'connect.php';
$id = $_GET['id'];



$sql ="DELETE FROM system_admin WHERE SystemAdmin_ID = '$id'";
if($conn->query($sql)){
    echo "deleted!";
    header("location:ephome.php");
}
else{
    echo "unsuccessful!";
}
?>


<?php include 'navbar.php';?>

<?php include 'footer.php';?>