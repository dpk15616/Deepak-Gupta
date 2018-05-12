<?php
session_start();
if(isset($_SESSION['uid']))
	echo "";
else
	header('location: ../login.php');


?>
<?php
	include('header.php');
	include('titlehead.php');
	include('../dbconn.php');
	$sid=$_GET['sid'];
	$sql="SELECT * FROM student WHERE id='$sid'";
	$run=mysqli_query($con,$sql);
	$data=mysqli_fetch_assoc($run);
	
	?>
	<form method="post" action="updatedata.php" enctype="multipart/form-data">
<table align="center" width="50%" height="300px">
<tr>
<th>Roll No </th>
 <td> <input type="text" name="rollno" value="<?php echo $data['rollno']; ?>" required></td>
</tr>
<tr>
<th>Full Name </th>
 <td> <input type="text" name="name" value="<?php echo $data['name']; ?>" required></td>
</tr>
<tr>
<th> Standard</th>
 <td> <input type="number" name="standard" value="<?php echo $data['standard']; ?>" required></td>
</tr>
<tr>
<th>City </th>
 <td> <input type="text" name="city" value="<?php echo $data['city']; ?>" required></td>
</tr>
<tr>
<th>Parents Contact No. </th>
 <td> <input type="text" name="pcon" value="<?php echo $data['parentsmobile']; ?>" required></td>
</tr>
<tr>
<th>Photo </th>
 <td> <input type="file" name="image" required></td>
</tr>
<tr>
 <td colspan="2" align="center">
// <input type="hidden" name="sid" value="<?php echo $data['id']; ?>" > 
 <input type="submit" name="submit" value="submit" required></td>
</tr>

</table>

</form>