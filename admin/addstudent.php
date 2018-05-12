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
	?>
<form method="post" action="addstudent.php" enctype="multipart/form-data">
<table align="center" width="50%" height="300px">
<tr>
<th>Roll No </th>
 <td> <input type="text" name="rollno" placeholder="Enter roll no" required></td>
</tr>
<tr>
<th>Full Name </th>
 <td> <input type="text" name="name" placeholder="Enter full name" required></td>
</tr>
<tr>
<th> Standard</th>
 <td> <input type="number" name="standard" placeholder="Enter your class" required></td>
</tr>
<tr>
<th>City </th>
 <td> <input type="text" name="city" placeholder="Enter your city" required></td>
</tr>
<tr>
<th>Parents Contact No. </th>
 <td> <input type="text" name="pcon" placeholder="Enter parents contact no." required></td>
</tr>
<tr>
<th>Photo </th>
 <td> <input type="file" name="image" required></td>
</tr>
<tr>
 <td colspan="2" align="center"> <input type="submit" name="submit" value="submit" required></td>
</tr>

</table>

</form>
</body>
</html>	
<?php
if(isset($_POST['submit']))
{
	include('../dbconn.php');
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$standard=$_POST['standard'];
	$city=$_POST['city'];
	$parc=$_POST['pcon'];
	$imagename=$_FILES['image']['name'];
	$tempname=$_FILES['image']['tmp_name'];
	move_uploaded_file($tempname,"../dataimg/$imagename");
	
	$qry=" INSERT INTO student(rollno,name,standard,city,parentsmobile,image) VALUES('$rollno','$name','$standard','$city','$parc','$imagename')";
	$run = mysqli_query($con,$qry);
	if($run==true)
	{
		?><script>
		alert('Data inserted successfully');
		</script>
		
		<?php
		
	
	}
	
}
?>