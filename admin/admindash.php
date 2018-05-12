<?php
session_start();
if(isset($_SESSION['uid']))
	echo "";
else
	header('location: ../login.php');


?>
<?php
	include('header.php');
	?>
	
<div class="admintitle">
	
	<h1 align="center"> Welcome to Admin Dashboard</h1>
	<div><h3 align="right" style="color:white;"> <a href="logout.php" style="color:white;">Logout</a> </h3></div>
	
	</div>
<div class="dashboard">
	<table>
	<tr> <td>1.</td><td><a href="addstudent.php"> Insert Student Details</a></td> </tr>
	<tr> <td>2.</td><td><a href="updatestudent.php"> Update Student Details</a></td> </tr>
	<tr> <td>3.</td><td><a href="deletestudent.php"> Delete Student Details</a></td> </tr>
	</table>
	</div>
	
	
	
	</body>
	</html> 