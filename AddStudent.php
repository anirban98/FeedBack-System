

<!DOCTYPE HTML>
<html>
<head>

<style>
body {
	background-color: #ffffe0 ;
	}
.button {
	background-color: #82b74b;
	border:none;
	color:#fff8dc;
	text-align: center;
	text-decoration:none;
	display:inline-block;
	font-size: 20px;
	margin:7px 4px;
	cursor: pointer;
}
.button {border-radius: 12px;}
</style>
</head>
<body>
<a href="homeAdmin.php" ><h3 align="left" color="#6e8b3d" colspan="2"><button name = "login" class ="button button"> Back</button></h3></a>
<h1 style="text-align:center; color: #006600;">Add Student</h1>
<br/>

<form action="AddStudent.php" method="post">
<table style="width:50%" align="center" border="1">

<tr>
<td><h3 style="Text-align:center; color:#006600 ">Name</h3></td>
<td><input type="text" name="name" required></td>
</tr>
<tr>
<td><h3 style="Text-align:center; color:#006600 ">Course</h3></td>
<td><input type="text" name="studcourse" required></td>
</tr>
<tr>
<td><h3 style="Text-align:center; color:#006600 ">Semester</h3></td>
<td>
<select name="sem">
<option value="1">First Semester</option>
<option value="2">Second Semester</option>
<option value="3">Third Semester</option>
<option value="4">Fourth Semester</option>
<option value="5">Fifth Semester</option>
<option value="6">Sixth Semester</option>
<option value="7">Seventh Semester</option>
<option value="8">Eighth Semester</option>
</select>
</td>
</tr>
<tr>
<td><h3 style="Text-align:center; color:#006600">Registration Number</h3></td>
<td><input type="text" name="studreg" required></td>
</tr>
<tr>
<td><h3 style="Text-align:center; color:#006600 ">University Roll Number</h3></td>
<td><input type="text" name="roll" required></td>
</tr>
<td><h3 style="Text-align:center; color:#006600">Gender</h3></td>
<td>
<select name="gen">
<option value="M">Male</option>
<option value="F">Female</option>
</td>
</select>
</tr>
<tr>
<td><h3 style="Text-align:center; color:#006600">Email</h3></td>
<td><input type="text" name="email" required></td>
</tr>
<tr>
<td><h3 style="Text-align:center; color:#006600">Mobile Number</h3></td>
<td><input type="text" name="mob" required></td>
</tr>
<tr>
<td align="center" color="#6e8b3d" colspan="2"><button name = "login" class="button button">Add Student</button></td>
</tr>
</table>


</form>
</body>
</html>


<?php

if(isset($_POST['login']))
{
	
	include('dbconnection.php');
	
		$studName = $_POST['name'];
		$studCourse = $_POST['studcourse'];
		$sem = $_POST['sem'];
		$studReg = $_POST['studreg'];
		$roll = $_POST['roll'];
		$gender = $_POST['gen'];
		$email = $_POST['email'];
		$mobile = $_POST['mob'];
		
		
		
		
			$qry = "INSERT INTO `student`(`Name`, `Course`, `Semester`, `Registration Number`, `University Roll Number`, `Gender`, `Email`, `Mobile Number`) VALUES ('$studName','$studCourse','$sem','$studReg','$roll','$gender','$email','$mobile')";
			$run = mysqli_query($con,$qry);
		
}
?>