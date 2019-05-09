

<?php

if(isset($_POST['save']))
{
	
	include('dbconnection.php');
	
		
		$name = $_POST['name'];
		$des = $_POST['des'];
		$course = $_POST['course'];
		$sem = $_POST['sem'];
		$sub = $_POST['sub'];
		$code = $_POST['code'];
	
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$mobile = $_POST['mob'];
		
		
			$temp1= substr($name,0,4);
			$temp2 = substr($mobile,0,4);
			$username = $temp1.$temp2;
			
			$q = "SELECT * FROM `staff` WHERE `Email`='$email'";
			$r = mysqli_query($con,$q);
			
			$row = mysqli_num_rows($r);
			if($row >0)
			{
				?>
				
				<script>
					alert("This Email already exist . Try a different Email");
					window.open('homeAdmin.php');
				</script>
				<?php
			}
			else
			{
				
				$qry = "INSERT INTO `staff`(`username`, `Name`, `Designation`, `Course`, `Semester`, `Subject`, `Subject Code`, `Email`, `Password`, `Mobile Number`) VALUES ('$username','$name','$des','$course','$sem','$sub','$code','$email','$pass','$mobile')";
				$run = mysqli_query($con,$qry);
				
			}
					
		
}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>staff</title>
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
	margin:4px 2px;
	cursor: pointer;
}
.button {border-radius: 12px;}
</style>
</head>
<body>
<a href="homeAdmin.php" ><h3 align="left" color="#6e8b3d" colspan="2"><button name = "login" class ="button button"> Back</button></h3></a>

<a href="logout.php" ><h3 align="right" color="#6e8b3d" colspan="2"><button name = "login" class ="button button">Logout</button></h3></a>
<h1 style="text-align:center; color: #006600;">Add Staff</h1>

<form  method="post">
<table style="width:30%; margin-top:5%" align="center" >
<tr>
<td style="text-align:left ;color:#006600">Name</td>
<td><input type="text"  color="#fff8dc" name="name" required></td>
</tr>
<tr>
<td style="text-align:left ;color:#006600">Designation</td>
<td><input type="text" color="#fff8dc" name="des" required></td>
</tr>
<tr>
<td style="text-align:left ;color:#006600">Course</td>
<td><input type="text" color="#fff8dc" name="course" required></td>
</tr>
<tr>
<td style="text-align:left ;color :#006600">Semester</td>
<td>
<select name="sem">
<option value="0">---Select---</option>
<option value="1">First Semester</option>
<option value="2">Second Semester</option>
<option value="3">Third Semester</option>
<option value="4">Fourth Semester</option>
<option value="5">Fifth Semester</option>
<option value="6">Sixth Semester</option>
<option value="7">Seventh Semester</option>
<option value="8">Eighth Semester</option>
</td>
</tr>
<tr>
<td  style="text-align:left ; color : #006600">Subject</td>
<td><input type="text"  color="#fff8dc" name="sub" required></td>
</tr>
<tr>
<td style="text-align:left ; color : #006600">Subject Code</td>
<td><input type="text" color="#fff8dc" name="code" required></td>
</tr>
<tr>
<td style="text-align:left ;color:#006600">Email</td>
<td><input type="text" color="#fff8dc" name="email" required></td>
</tr>
<tr>
<td style="text-align:left ;color:#006600">Password</td>
<td><input type="text" color="#fff8dc" name="pass" required></td>
</tr>
<tr>
<td style="text-align:left ;color:#006600">Mobile Number</td>
<td><input type="text"  color="#fff8dc" name="mob" required></td>
</tr>

</table>
<h3 align="center"; color="#6e8b3d"><button name="save" class="button button">Add Staff</button></h3>
</form>
</body>
</html>