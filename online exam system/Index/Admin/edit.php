<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="edit.css" /> 
</head>

<body>
<?php include 'navbar.php';?>
<div class="main">
    <div class="upper">
        <div class="box"><div class="text"><a href="#">Get Exam Report</a></div></div>
        <div class="box"><div class="text"><a href="ManageFaq.php">Manage FAQ</a></div></div>
        <div class="box"><div class="text"><a href="manageExam.php">Manage Exam</a></div></div>
    </div>
</div>
<div class="top">
    <div class="up">
        <input type="button" value="Manage Employee">
        <input type="search" id="employee-search" placeholder="Search Employee ID" onkeyup="searchEmployee()">
        <br><br>
    </div>
    <div class="middle" id="employee-results">
        <?php
        require_once "../connect.php";
        // Assuming you have a MySQL database connection established

        // Add a variable to store the searched Employee ID
        $searchedEmployeeID = $_GET['employeeID'] ?? '';

        $sql = "SELECT e.EmployeeID FROM employee AS e
        LEFT JOIN emp_signup AS es ON e.EmployeeID = es.EmpID
        WHERE e.EmployeeID IS NOT NULL AND e.EmployeeID <> ''"; // Modify this query according to your database table and column names
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['EmployeeID'];
                
                // Check if the current Employee ID matches the searched ID
                $highlightClass = ($id === $searchedEmployeeID) ? 'highlight' : '';

                ?>
                <div class="card <?php echo $highlightClass; ?>">
                    <li><?php echo $id; ?></li>
                    <img src="image/profile.png" width="80px">
                    <input type="button" value="Edit User" onclick="window.location.href='edituser.php?id=<?php echo $id; ?>'">
                </div>
                <?php
            }
        } else {
            echo "No users found.";
        }
		
		$sql = "SELECT * FROM emp_signup"; // Modify this query according to your database table and column names
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['EmpID'];
			
			$highlightClass = ($id === $searchedEmployeeID) ? 'highlight' : '';
			?>
                <div class="card <?php echo $highlightClass; ?>">
                    <li><?php echo $id; ?></li>
                    <img src="image/profile.png" width="80px">
                    <input type="button" value="Edit User" onclick="window.location.href='edituser.php?id=<?php echo $id; ?>'">
                </div>
			    <?php
            }
        } else {
            echo "No users found.";
        }
        ?>
    </div>
</div>

<!-- Repeat the same structure for Exam Provider, Support Staff, and System Admin sections -->
<div class="top">
    <div class="up">
        <input type="button" value="Manage Exam Provider">
        <input type="search" id="exam-provider-search" placeholder="Search Exam Provider ID" onkeyup="searchExamProvider()">
        <br><br>
    </div>
    <div class="middle" id="exam-provider-results">
        <?php
        // Query for Exam Provider table
        $searchedExamProviderID = $_GET['ExamProvider_ID'] ?? '';
        $sql = "SELECT ExamProvider_ID FROM exam_provider WHERE ExamProvider_ID IS NOT NULL AND ExamProvider_ID <> ''"; // Modify this query according to your database table and column names
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['ExamProvider_ID'];

                // Check if the current Exam Provider ID matches the searched ID
                $highlightClass = ($id === $searchedExamProviderID) ? 'highlight' : '';

                ?>
                <div class="card <?php echo $highlightClass; ?>">
                    <li><?php echo $id; ?></li>
                    <img src="image/profile.png" width="80px">
                    <input type="button" value="Edit User" onclick="window.location.href='edituser.php?id=<?php echo $id; ?>'">
                </div>
                <?php
            }
        } else {
            echo "No users found.";
        }
        ?>
    </div>
</div>

<!-- Similar sections for Support Staff and System Admin -->
<div class="top">
    <div class="up">
        <input type="button" value="Manage Support Staff">
        <input type="search" id="support-staff-search" placeholder="Search Support Staff ID" onkeyup="searchSupportStaff()">
        <br><br>
    </div>
    <div class="middle" id="support-staff-results">
        <?php
        // Query for Support Staff table
        $searchedSupportStaffID = $_GET['support-staff-search'] ?? '';
        $sql = "SELECT SupportStaff_ID FROM supportstaff WHERE SupportStaff_ID IS NOT NULL AND SupportStaff_ID <> ''"; // Modify this query according to your database table and column names
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['SupportStaff_ID'];

                // Check if the current Support Staff ID matches the searched ID
                $highlightClass = ($id === $searchedSupportStaffID) ? 'highlight' : '';

                ?>
                <div class="card <?php echo $highlightClass; ?>">
                    <li><?php echo $id; ?></li>
                    <img src="image/profile.png" width="80px">
                    <input type="button" value="Edit User" onclick="window.location.href='edituser.php?id=<?php echo $id; ?>'">
                </div>
                <?php
            }
        } else {
            echo "No users found.";
        }
        ?>
    </div>
</div>

<div class="top">
    <div class="up">
        <input type="button" value="Manage System Admin">
        <input type="search" id="system-admin-search" placeholder="Search System Admin" onkeyup="searchSystemAdmin()">
        <br><br>
    </div>
    <div class="middle" id="system-admin-results">
        <?php
        // Query for System Admin table
        $searchedSystemAdminID = $_GET['system-admin-search'] ?? '';
        $sql = "SELECT SystemAdmin_ID FROM system_admin WHERE SystemAdmin_ID IS NOT NULL AND SystemAdmin_ID <> ''"; // Modify this query according to your database table and column names
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['SystemAdmin_ID'];

                // Check if the current System Admin ID matches the searched ID
                $highlightClass = ($id === $searchedSystemAdminID) ? 'highlight' : '';

                ?>
                <div class="card <?php echo $highlightClass; ?>">
                    <li><?php echo $id; ?></li>
                    <img src="image/profile.png" width="80px">
                    <input type="button" value="Edit User" onclick="window.location.href='edituser.php?id=<?php echo $id; ?>'">
                </div>
                <?php
            }
        } else {
            echo "No users found.";
        }
        ?>
    </div>
</div>


<br>

<?php include 'footer.php';?>

<!-- JavaScript code for search functionality -->
<script>
    function searchEmployee() {
        var input = document.getElementById('employee-search');
        var filter = input.value.toUpperCase();
        var resultsContainer = document.getElementById('employee-results');
        var results = resultsContainer.getElementsByClassName('card');

        for (var i = 0; i < results.length; i++) {
            var li = results[i].getElementsByTagName('li')[0];
            var employeeID = li.textContent || li.innerText;

            if (employeeID.toUpperCase().indexOf(filter) > -1) {
                results[i].style.display = '';
            } else {
                results[i].style.display = 'none';
            }
        }
    }

    // Repeat the same function for Exam Provider, Support Staff, and System Admin sections
    function searchExamProvider() {
        var input = document.getElementById('exam-provider-search');
        var filter = input.value.toUpperCase();
        var resultsContainer = document.getElementById('exam-provider-results');
        var results = resultsContainer.getElementsByClassName('card');

        for (var i = 0; i < results.length; i++) {
            var li = results[i].getElementsByTagName('li')[0];
            var examProviderID = li.textContent || li.innerText;

            if (examProviderID.toUpperCase().indexOf(filter) > -1) {
                results[i].style.display = '';
            } else {
                results[i].style.display = 'none';
            }
        }
    }

    function searchSupportStaff() {
        var input = document.getElementById('support-staff-search');
        var filter = input.value.toUpperCase();
        var resultsContainer = document.getElementById('support-staff-results');
        var results = resultsContainer.getElementsByClassName('card');

        for (var i = 0; i < results.length; i++) {
            var li = results[i].getElementsByTagName('li')[0];
            var supportstaffid = li.textContent || li.innerText;

            if (supportstaffid.toUpperCase().indexOf(filter) > -1) {
                results[i].style.display = '';
            } else {
                results[i].style.display = 'none';
            }
        }
    }

    function searchSystemAdmin() {
        var input = document.getElementById('system-admin-search');
        var filter = input.value.toUpperCase();
        var resultsContainer = document.getElementById('system-admin-results');
        var results = resultsContainer.getElementsByClassName('card');

        for (var i = 0; i < results.length; i++) {
            var li = results[i].getElementsByTagName('li')[0];
            var systemadminid = li.textContent || li.innerText;

            if (systemadminid.toUpperCase().indexOf(filter) > -1) {
                results[i].style.display = '';
            } else {
                results[i].style.display = 'none';
            }
        }
    }
</script>
</body>
</html>