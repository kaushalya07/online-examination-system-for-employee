<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="edituser.css" /> 
</head>
<body>
    <?php include 'navbar.php'; ?>
    <h1>Edit User</h1><br><br>

    <form action="updatess.php" method="post">
        <?php
        $supportstaffID = $_GET['id'] ?? '';

        echo '<input type="hidden" id="id" name="id" value="' . $supportstaffID . '" required>';

        echo '<label for="id">Support Staff ID:</label>';
        echo '<input type="text" id="id" name="id" value="' . $supportstaffID . '" disabled><br><br>';
        ?>

        <label for="Name">Name:</label>
        <input type="text" id="Name" name="Name" required><br><br>

        <label for="password">Password:</label>
        <input type="text" id="password" name="password" required><br><br>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Save Changes">
    </form>
    
    <?php include 'footer.php'; ?>
</body>
</html>
