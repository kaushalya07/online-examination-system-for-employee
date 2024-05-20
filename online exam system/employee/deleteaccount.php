<?php 
require 'connect.php';
$id = $_GET['id'];



$sql ="DELETE FROM emp_signup WHERE EmpID = '$id'";
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