<?php include 'navbar.php';?>


<?php 
$id = $_GET['id'];
$sql = "SELECT * from system_admin where SystemAdmin_ID = '$id'";

$result = $conn->query($sql);

if($result->num_rows>0){
     while($row = $result->fetch_assoc()) {
        
        $name = $row["SystemAdmin_Name"];
        $pass = $row["Password"];
        $email = $row["Email"];
    }
}
$sql2 = "SELECT * from systemadmin_phoneno where SystemAdmin_ID = '$id'";
$result = $conn->query($sql2);

if($result->num_rows>0){
     while($row = $result->fetch_assoc()) {
        $p_Num = $row["PhoneNo"];
    }
}


?>

 <style>
 .container-update{
    width: 400px;
    height: auto;
    background-color: rgba(77, 77, 77, 0.529);
    border: solid black;
    margin-left: 200px;
    margin-top: 100px;
    margin-bottom: 100px;

}
.edit-head{
    width: 400px;
    height: 40px;
    background-color: antiquewhite;
    
}
.edit-text-box{
    margin-top: 20px;
    padding: 10px;
    background-color:white ;
}
.edit-update{
    margin-top: 30px;
    margin-bottom: 10px;
    
}
#message{
    color: red;
}

</style>


 <div class="container-update">
  <div class="edit-head"><h1> Edit </h1></div>
  <form  method="POST" action="submitupdate.php?id=<?php echo $id;?>">
     <div class="edit-text-box">
       <label for="name">Name:</label>
       <input type="text" id="first-name" name="name" value = "<?php echo $name; ?>" ><br><br>

       <label for="phone-number">Phone Number:</label>
       <input  type="text" onmouseover="displayMessage()" onmouseout="clearMessage()" id="phone-number" name="phone-number" value = "<?php echo $p_Num; ?>"><br><br>
       <p id="message"></p>

       <label for="password">Password:</label>
       <input type="text" id="password" name="password" value = "<?php echo $pass; ?>"><br><br>

       <label for="email">Email:</label>
       <input type="email" id="email" name="email" value = "<?php echo $email; ?>"><br><br>
     </div>
       <div class="edit-update"><input onclick='myFunction();' type="submit" value="Update"></div>
     
     </form>

     </div>



<?php include 'footer.php';?>


<script>
function myFunction() {
alert("Profile Updated!  Please re Login in");

}
function displayMessage() {
        var message = document.getElementById("message");
        message.textContent = "Please enter 10 digits Number";
      }

      function clearMessage() {
        var message = document.getElementById("message");
        message.textContent = "";
}


</script>