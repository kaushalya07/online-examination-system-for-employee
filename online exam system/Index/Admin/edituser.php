<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="edituser.css" /> 
</head>
<?php include 'navbar.php';?>
<body>
    <h1>Edit User</h1><br><br>

    <form action="edit.php" method="post">
        <label for="id">Employee ID:</label>
        <input type="text" id="id" name="id" required><br><br>

        <label for="name">First  Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="name">Last  Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="name"> Password: </label>
        <input type="text" id="password" name="password" required><br><br>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Save Changes">
    </form>
    
</body>
<?php include 'footer.php';?>
</html>