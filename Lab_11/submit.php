<html>
	<body>
		<?php
		$FirstName = $_REQUEST['FirstName'];
		$LastName = $_REQUEST['LastName'];
		$Username = $_REQUEST['Username'];
		$Password = $_REQUEST['Password'];
		$Gender = $_REQUEST['gender'];
		$AcademicYear = $_REQUEST['AcademicYear'];
        $Email = $_REQUEST['email'];
        $MobileNumber = $_REQUEST['MobileNumber'];
		?>
        <table border="1">
            <tr>
                <td>First Name</td>
                <td><?php echo $FirstName ?></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><?php echo $LastName ?></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><?php echo $Username ?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><?php echo $Password ?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><?php echo $Gender ?></td>
            </tr>
            <tr>
                <td>Academic Year</td>
                <td><?php echo $AcademicYear ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $Email ?></td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td><?php echo $MobileNumber ?></td>
            </tr>
        </table>
	</body>
</html>