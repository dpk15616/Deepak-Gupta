<?php
include('../dbconn.php');
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$standard=$_POST['standard'];
	$city=$_POST['city']; 
	$parc=$_POST['pcon'];
	$id=$_POST['sid'];
	$imagename=$_FILES['image']['name'];
	$tempname=$_FILES['image']['tmp_name'];
	move_uploaded_file($tempname,"../dataimg/$imagename");
	
	$qry=" UPDATE student SET id='$id', rollno='$rollno',name='$name',standard='$standard',city='$city',parentsmobile='$parc',image='$imagename' WHERE id='$id' ";
	$run = mysqli_query($con,$qry);
	if($run==true)
	{
		?><script>
		alert('Data updated successfully');
		window.open('updateform.php?sid=<?php echo $id; ?>','_self');
		</script>
		<?php
		
	}
	?>