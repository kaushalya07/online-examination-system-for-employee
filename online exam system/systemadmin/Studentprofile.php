<?php include 'navbar.php';?>

<style>.studentbox{
    width: 400px;
    height: auto;
    background-color: rgba(77, 77, 77, 0.529);
    margin-left: 200px;
    margin-top: 100px;
    margin-bottom: 100px;
    border: solid rgb(0, 0, 0);
    
    
    }
.head_student{
    width: 400px;
    height: 40px;
    background-color: antiquewhite;
}

.stuent_text{
    margin-top: 20px;
    padding: 10px;
    background-color:white ;
}

.delete{
    margin-top: 30px;
    margin-bottom: 10px;
    background-color: lightcoral;
    
}

.delete :hover{

    background-color: red;
}

.update{
    margin-top: 30px;
    margin-bottom: 10px;
    background-color: rgb(128, 178, 240);
    
}

.update a:hover{

    background-color: blue;
    text-decoration: none;
}</style>

                                          
<?php

$sql = "SELECT * from system_admin where Email = '$key'";
$result = $conn->query($sql);



if($result->num_rows>0){

   while($row = $result->fetch_assoc()) {

       $id = $row["SystemAdmin_ID"];    


    echo "<div class='studentbox'>";
      echo "<h1 class='head_student'>System Admin Profile</h1>";
      echo "<div class='stuent_text'>";
      echo  "<label for='first-name'>Name:" .$row["SystemAdmin_Name"]. "</label>  <br><br>";

      $saID = $row["SystemAdmin_ID"];
      $phoneQuery = "SELECT PhoneNo FROM systemadmin_phoneno WHERE SystemAdmin_ID = '$saID'";
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
      


      echo "</td> <button  type='submit' class ='update'> <a href='updatestudent.php?id=$id'>UPDATE</a></button> <td> ";
      
   echo "</div>";
   }                             
                                                                                    
} 
else{
    echo "no results";
}
?>


<?php include 'footer.php';?>