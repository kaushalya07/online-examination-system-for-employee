<?php include 'navbar.php';?>

<!-- Linking the CSS stylesheet -->
<head>
<link rel="stylesheet" type="text/css" href="StudentProfile.css">
</head>



<!--Querying the database for employee signup data-->
                                          
<?php
$sql = "SELECT * from emp_signup where Email = '$key'";
$result = $conn->query($sql);



if($result->num_rows>0){

   while($row = $result->fetch_assoc()) {

       $id = $row["EmpID"];    


    echo "<div class='studentbox'>";
      echo "<h1 class='head_student'>Employee Profile</h1>";
      echo "<div class='stuent_text'>";
      echo  "<label for='first-name'>First Name:" .$row["Firstname"]. "</label>  <br><br>";
    
      echo  "<label for='last-name'>Last Name:" .$row["Lastname"]."</label> <br><br>";
    
      echo  "<label for='phone-number'>Phone Number:".$row["PhoneNumber"]."</label> <br><br>";
    
      echo  "<label for='password'>Password:".$row["Password"]."</label> <br><br>";
    
      echo "<label for='email'>Email:".$row["Email"]."</label> <br><br>";
      
      echo "</div>";

      echo "<tr>";
      echo "<td>";
      echo "<button onclick=\"confirmDelete('$id')\" type='submit'>DELETE</button>";


      echo "</td> <button  type='submit' class ='update'> <a href='updatestudent.php?id=$id'>UPDATE</a></button> <td> ";
      
   echo "</div>";
   }                             
                                                                                    
} 

?>

<!-- Querying the database for employee data -->
<?php
$sql = "SELECT * from employee where Email = '$key'";
$result = $conn->query($sql);



if($result->num_rows>0){

   while($row = $result->fetch_assoc()) {

       $id = $row["EmployeeID"];    


    echo "<div class='studentbox'>";
      echo "<h1 class='head_student'>Employee Profile</h1>";
      echo "<div class='stuent_text'>";
      echo  "<label for='first-name'>First Name:" .$row["First_Name"]. "</label>  <br><br>";
    
      echo  "<label for='last-name'>Last Name:" .$row["Last_Name"]."</label> <br><br>";
    
    $employeeID = $row["EmployeeID"];
    $phoneQuery = "SELECT PhoneNo FROM employee_phoneno WHERE Employee_ID = '$employeeID'";
    $phoneResult = $conn->query($phoneQuery);
    if ($phoneResult->num_rows > 0) {
      $phoneRow = $phoneResult->fetch_assoc();
      echo "<label for='phone-number'>Phone Number: " . $phoneRow["PhoneNo"] . "</label><br><br>";
    }
    
      echo  "<label for='password'>Password:".$row["Password"]."</label> <br><br>";
    
      echo "<label for='email'>Email:".$row["Email"]."</label> <br><br>";
      
      echo "</div>";

      echo "<tr>";
      echo "<td>";
      echo "<button onclick=\"confirmDelete('$id')\" type='submit'>DELETE</button>";


      echo "</td> <button  type='submit' class ='update'> <a href='updatestudent.php?id=$id'>UPDATE</a></button> <td> ";
      
   echo "</div>";
   }                             
                                                                                    
} 

?>


<!--conifrm box java script -->
<script>
  function confirmDelete(id) {
    var confirmed = confirm("Do you want to delete the account?");

    if (confirmed) {
      window.location.href = "deleteaccount.php?id=" + id;
    }
    else{
        return false;
    }
  }
</script>

<?php include 'footer.php';?>