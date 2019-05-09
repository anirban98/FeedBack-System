<!DOCTYPE html>
<html>
<head>
<title> STAFF FEEDBACK PORTAL</title>
<style>
body {
	background-color: #ffffe0 ;
	}
div{
	border: 1px solid balck;
	background-color: #82b74b;
	padding-top: 25px;
	padding-right: 50px;
	padding-bottom: 75px;
	padding-left: 100px;
}
.button {
	background-color: #82b74b;
	border:none;
	color:#fff8dc;
	text-align: center;
	text-decoration:none;
	display:inline-block;
	font-size: 20px;
	margin:4px 2px;
	cursor: pointer;
}
.button {border-radius: 12px;}
</style>
</head>
<body>
<div><h1 style="Text-align:center; color:#fff8dc;">STAFF / STUDENT FEEDBACK PORTAL</h1></div>
<h1 style="Text-align:center;color:#333300">Staff Login</h1>
<form action="staff.php" method="post">
<table align="center" style="margin-top:25px">
<tr>
<td><h3 style="Text-align:center; color:#333300">Username:</h3></td>
<td><input type="text" name="Username"  required></td>
</tr>
<tr>

<td><h3 style="Text-align:center; color:#333300">Password:</h3></td>
<td><input type="password" name="Password"  required></td>
</tr>
<tr>
<td style="Text-align:center" colspan="2"><button name="submit" class="button button">Login</button></td>
</tr>
</table>
</form>
</body>
</html>



<?php

include('dbconnection.php');
if(isset($_POST['submit']))
{
	$Staffname = $_POST['Username'];
	$Staffpass = $_POST['Password'];
	
	$qry = "SELECT * FROM `staff` WHERE `username` = '$Staffname' AND `Password` = '$Staffpass'";
	$run = mysqli_query($con,$qry);
	
	$row = mysqli_num_rows($run);
	
	if($row <1)
	{
		?>
		<script>
		alert("invalid username or password !!");
		window.open('staff.php','_self');
		</script>
		<?php
	}
	else
	{
		$data = mysqli_fetch_assoc($run);
		$id = $data['id'];
		session_start();
		$_SESSION['uid']=$id;
		$_SESSION['staff']= $Staffname;
		header('location: faculty_show_feedback_trial.php');
	}
	
}
		
?>