<!DOCTYPE HTML>
<html lang="en_US">
<head>
<meta charset="UTF-8">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<title>Student Management System </title>

</head>

<body style="background-color:gray;">
<h3 align="right" style="margin-right:20px;"> <a href="login.php">Admin login </a></h3>
<h1 align="center" style="background-color:black; color:#fff;" >Welcome to Student Management System </h1>
<form method = "post">
<table align="center" border="1" width="40%">
<tr><th colspan="2"> STUDENT INFORMATION</th>
</tr>


<tr align="left"><td> Standard </td>  
<td align="left"> <input type="number" name="standard" required > </td>
</tr>
<tr align="left"><td> Roll No. </td><td> <input type="text" name="rollno" required ></td></tr>
<tr align="center" > <td colspan="2"><input type="submit" name="submit" value="SHOW INFO" required> </td></tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
	$standard=$_POST['standard'];
	$rollno=$_POST['rollno'];
	include('dbconn.php');
	include('function.php');
	showdetails($standard,$rollno);
	
}

?>








