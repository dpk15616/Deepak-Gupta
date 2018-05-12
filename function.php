<?php
function showdetails($standard,$rollno)
{
	include('dbconn.php');
	$qry=" SELECT * FROM student WHERE rollno='$rollno' AND standard='$standard'";
	$run=mysqli_query($con,$qry);
	if(mysqli_num_rows($run)>0)
	{
		$data=mysqli_fetch_assoc($run);
		?>
		<table border="1" style="width:80%; margin-top:20px;">
		<tr>
		<th colspan="3"> Student Details</th>
		</tr>
		<tr> 
		<td rowspan="5" align="center"><img src="dataimg/<?php echo $data['image']; ?>" style="max-width:150px; max-height:150px;" /></td>
		<th>ROLL NO.</th>
		<td><?php echo $data['rollno']; ?></td>
		</tr>
		<tr>
		<th>NAME</th>
		<td><?php echo $data['name']; ?></td>
		</tr>
		<tr>
		<th>STANDARD</th>
		<td><?php echo $data['standard']; ?></td>
		</tr>
		<tr>
		<th>PARENTS CONTACT NO.</th>
		<td><?php echo $data['parentsmobile']; ?></td>
		</tr>
		<tr>
		<th>CITY</th>
		<td><?php echo $data['city']; ?></td>
		</tr>
		
		</table>
		<?php
		
	}
	else
		echo "<script>alert('NO RECORD FOUND');</script>";	
}

?>