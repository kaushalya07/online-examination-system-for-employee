<?php include 'navbar.php';?>

<!-- Linking the CSS stylesheet -->
<head>
<link rel="stylesheet" type="text/css" href="updatestudent.css">
</head>



<?php 
// Get the ID from the URL parameter
$id = $_GET['id'];

// Query the database for employee signup data using the ID
$sql = "SELECT * from emp_signup where EmpID = '$id'";

$result = $conn->query($sql);

if($result->num_rows>0){
     while($row = $result->fetch_assoc()) {
        // Retrieve and store the employee signup data

        $f_Name = $row["Firstname"];
        $l_Name = $row["Lastname"];
        $p_Num = $row["PhoneNumber"];
        $pass = $row["Password"];
        $email = $row["Email"];
    }
}
// Query the database for employee data using the ID
$sql1 = "SELECT * from employee where EmployeeID = '$id'";
$result = $conn->query($sql1);

if($result->num_rows>0){
     while($row = $result->fetch_assoc()) {
        // Retrieve and store the employee data

        $f_Name = $row["First_Name"];
        $l_Name = $row["Last_Name"];
        $pass = $row["Password"];
        $email = $row["Email"];
    }
}
// Query the database for employee phone number using the ID
$sql2 = "SELECT * from employee_phoneno where Employee_ID = '$id'";
$result = $conn->query($sql2);

if($result->num_rows>0){
     while($row = $result->fetch_assoc()) {
        // Retrieve and store the employee phone number
        $p_Num = $row["PhoneNo"];
    }
}

?>

 
 <div class="container-update">
  <div class="edit-head"><h1> Edit </h1></div>
  <form  method="POST" action="submitupdate.php?id=<?php echo $id;?>">
     <div class="edit-text-box">
       <label for="first-name">First Name:</label>
       <input type="text" id="first-name" name="first-name" value = "<?php echo $f_Name; ?>" ><br><br>
  
       <label for="last-name">Last Name:</label>
       <input type="text" id="last-name" name="last-name"  value = "<?php echo $l_Name; ?>"><br><br>

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