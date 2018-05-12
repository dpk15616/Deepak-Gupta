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

<table align="center" width="50%">
<form action="deletestudent.php" method="post">
<tr>
<th>Enter Standard </th><td><input type="number" name="standard" placeholder="Enter Standard" required></td>
</tr>
<tr>
<th>Enter Student Name </th><td><input type="text" name="name" placeholder="Enter Student Name" required></td>
</tr>
<tr><td colspan="2" align="center"> <input type="submit" name="submit" value="Search" required></td></tr>

</form>
</table>
<br></br>
<br></br>
<table align="center" width="90%" border="2">
<tr style="background-color:#000; color:#fff;">
<th>No.</th>
<th>Image</th>
<th>Name</th>
<th> Roll No.</th>
<th>Delete</th>
</tr>




<?php
if(isset($_POST['submit']))
{
	include('../dbconn.php');
	$standard=$_POST['standard'];
	$name=$_POST['name'];
	$sql="SELECT * FROM student WHERE standard='$standard' AND name LIKE '%$name%'";
	$run=mysqli_query($con,$sql);
	if(mysqli_num_rows($run)<1)
	{
		//echo "NO record found";
		?><tr><td colspan="5" align="center"><?php echo "No record found!!";?></td></tr> <?php
	}
	else
	{
		$count=0;
		while($data=mysqli_fetch_assoc($run))
		{
			$count++;
			?>
			
			<tr align="center">
				<td><?php echo $count; ?></td>
				<td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width:100px;" /></td>
				<td><?php echo $data['name']; ?></td>
				<td><?php echo $data['rollno'];?></td>
				<td><a href="deleteform.php?sid=<?php echo $data['id']; ?>">Delete </a></td>
			</tr></table><?php
			
		}
	}
		
}
?>


	
	