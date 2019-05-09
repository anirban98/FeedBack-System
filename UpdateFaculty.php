

<?php

	
	include('dbconnection.php');

	$id = $_GET['id'];
	
	$sql = "SELECT * FROM `staff` WHERE `id`='$id'";
	$r = mysqli_query($con,$sql);
	
	
	$data = mysqli_fetch_assoc($r);
	
	


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
<h1 style="text-align:center; color: #008080;">Update Faculty</h1>

<form  method="post" action="update_faculty_1.php">
<table style="width:30%; margin-top:5%" align="center" >
<tr>
<td style="text-align:left ;color:#008080">Name</td>
<td><input type="text"  color="#fff8dc" name="name" value=<?php echo $data['Name']?> required></td>
</tr>
<tr>
<td style="text-align:left ;color:#008080">Designation</td>
<td><input type="text" color="#fff8dc" name="des" value=<?php echo $data['Designation']?> required></td>
</tr>
<tr>
<td style="text-align:left ;color:#008080">Course</td>
<td><input type="text" color="#fff8dc" name="course"  value=<?php echo $data['Course']?> required></td>
</tr>
<tr>
<td style="text-align:left ;color :#008080">Semester</td>
<td>
<input type="text" color ="#fff8dc" name="sem"  value=<?php echo $data['Semester']?> required>
</td>
</tr>
<tr>
<td  style="text-align:left ; color : #008080">Subject</td>
<td><input type="text"  color="#fff8dc" name="sub"  value=<?php echo $data['Subject']?> required></td>
</tr>
<tr>
<td style="text-align:left ; color : #008080">Subject Code</td>
<td><input type="text" color="#fff8dc" name="code"  value=<?php echo $data['Subject Code']?> required></td>
</tr>
<tr>
<td style="text-align:left ;color:#008080">Email</td>
<td><input type="text" color="#fff8dc" name="email"  value=<?php echo $data['Email']?> required></td>
</tr>
<tr>
<td style="text-align:left ;color:#008080">Password</td>
<td><input type="text" color="#fff8dc" name="pass"  value=<?php echo $data['Password']?> required></td>
</tr>
<tr>
<td style="text-align:left ;color:#008080">Mobile Number</td>
<td><input type="text"  color="#fff8dc" name="mob"  value=<?php echo $data['Mobile Number']?> required></td>
</tr>
<tr>
<td colspan="2">
<input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
<h3 align="center"; color="#6e8b3d"><button name="save" class="button button">Update</button></h3></td>
</tr>
</table>

</form>
</body>
</html>