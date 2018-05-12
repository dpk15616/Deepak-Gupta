<?php
session_start();
if(isset($_SESSION['uid']))
{header('location:admin/admindash.php');
}
?>

<!DOCTYPE HTML>
<html lang="en_US">
<head>
<meta charset="UTF-8">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<title>Admin login</title>
</head>
<body>
<h1 align="center"> Admin login</h1>
<form action="login.php" method="post">
<table align="center">
<tr>
<td > Username</td><td><input type="text" name="uname" required> </td>
</tr>
<tr>
<td> Password</td><td> <input type="password" name="pass" required></td> 
</tr>
<tr><td colspan="2" align="center"> <input type="submit" name="login" value="login"</td></tr>

</table>




</form>
</body>
</html>
<?php
include('dbconn.php');
if(isset($_POST['login']))
{
	$username=$_POST['uname'];
	$password=$_POST['pass'];
	$qry="SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$run= mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);
	if($row<1)
	{
		?>
		<script>
		alert('ussername or password is not match');
		window.open('login.php','_self');
		</script>
		<?php
	}
	else
	{
		$data=mysqli_fetch_assoc($run);
		$id=$data['id'];
		//session_start(); we must use this fun on top for escaping from again login in other tab in browser
		$_SESSION['uid']=$id; // session whose name is uid
		header('location:admin/admindash.php'); //redirect webpage location
	
	}
}
	
	
	
	
	
	
	


?>
