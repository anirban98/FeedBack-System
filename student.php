

<!DOCTYPE html>
<html>
<head>
<title> STUDENT FEEDBACK PORTAL</title>
<style>
body {
	background-color: #ffffe0 ;
	}
div{
	border: 2px solid balck;
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
<h1 style="Text-align:center;color:#333300">Student Login</h1>
<form action="student.php" method="post">
<table align="center" style="margin-top:25px">
<tr>
<td><h3 style="Text-align:center;color:#333300 ">Username: </h3></td>
<td><input type="text" name="Username" required ><br/></td>
</tr>
<tr>
<td><h3 style="Text-align:center; color:#333300">Password: </h3></td>
<td><input type="password" name="Password" required ></td>
</tr>
<tr>
<td align="center" colspan="2"><button name="login" class="button button" >Login</button></td>
</tr>
</table>
</form>

</body>
</html>

<?php

include('dbconnection.php');
if(isset($_POST['login']))
{
	$Stdname = $_POST['Username'];
	$Stdpass = $_POST['Password'];
	
	$qry = "SELECT * FROM `student` WHERE `University Roll Number` = '$Stdname' AND `University Roll Number` = '$Stdpass'";
	$run = mysqli_query($con,$qry);
	
	$row = mysqli_num_rows($run);
	
	if($row <1)
	{
		?>
		<script>
		alert("invalid username or password !!");
		window.open('student.php','_self');
		</script>
		<?php
	}
	else
	{
		$data = mysqli_fetch_assoc($run);
		$id = $data['id'];
		session_start();
		$_SESSION['uid']=$id;
		$_SESSION['student']= $Stdname;
		header('location: faculty_home.php');
	}
	
}
		
?>