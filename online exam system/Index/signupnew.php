<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>

<?php include 'navbar.php';?>
<div class="main">  	
    <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form action="signup.inc.php" method="POST">
                <label for="chk" aria-hidden="true">Sign up</label>
                <input type="text" name="firstName" placeholder="First Name" required="">
                <input type="text" name="lastName" placeholder="Last Name" required="">
                <input type="text" name="employeeID" placeholder="Employee ID" required="">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="text" name="phoneNumber" placeholder="Phone Number" required="">
                <input type="password" name="password" placeholder="Password" required="">
                <input type="password" name="confirmPassword" placeholder="Re enter Password" required="">
                
                <button type="submit">Signup</button>
            </form>
        </div>

        <div class="login">
        <form action="login.inc.php" method="POST">
                <label for="chk" aria-hidden="true">Login</label>
                <input type="text" name="email" placeholder="email" required="">
                <input type="password" name="pwd" placeholder="Password" required="">
                <button name="submit" type="submit">Login</button>
            </form>
        </div>
       <a href="employee/ephome.php"
</div> 



<?php include 'footer.php';?>


</body>
</html>