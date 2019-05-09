


<?php
include('dbconnection.php');

	
	function showData()
	{
		global $con;
		$query = "SELECT * FROM `staff` ";
		$run = mysqli_query($con,$query);
		if($run == true)
		{
			?>
			<table border="1" width = "100%" align="center" style="margin-top:50px">
			<tr>
			<th>S.No.</th>
			<th>Name</th>
			<th>Designation</th>
			<th>Course</th>
			<th>Semester</th>
			<th>Username</th>
			<th>Subject</th>
			<th>Subject Code</th>
			<th>Email</th>
			<th>Password</th>
			<th>Mobile Number</th>
			<th>Update</th>
			<th>Delete</th></tr>
			<?php
			$i = 1;
			while($data = mysqli_fetch_assoc($run))
			{
				
				?>
				<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $data['Name']; ?></td>
				<td><?php echo $data['Designation']; ?></td>
				<td><?php echo $data['Course']; ?></td>
				<td><?php echo $data['Semester']; ?></td>
				<td><?php echo $data['username']; ?></td>
				<td><?php echo $data['Subject']; ?></td>
				<td><?php echo $data['Subject Code']; ?></td>
				<td><?php echo $data['Email']; ?></td>
				<td><?php echo $data['Password']; ?></td>
				<td><?php echo $data['Mobile Number']; ?></td>
				<td><a href="UpdateFaculty.php?id=<?php echo $data['id'];?>"><button class="button button">update</button></a></td>
				<td><a href="delete_faculty.php?id=<?php echo $data['id']; ?>"><button class="button button">delete</button></a></td>
				</tr>
				<?php
				$i++;
			}
			?></table><?php
		}
		else
		{
			echo "error";
		}
	}
	
?>

<html>
<head>
<title>show data</title>
<style>
body {
	background-color: #ffffe0 ;
	}
div{
	border: 1px solid balck;
	background-color: #82b74b;
	padding-top: 25px;
	padding-right: 50px;
	padding-bottom: 45px;
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

<div>
<h3 style="text-align:left; color:#ffffe0"><a href="homeAdmin.php"><button class="button button">Back</button></a></h3>
<h1 style="text-align:center; color:#fff8dc">Manage Faculty</h1></div>
<?php

showData();
?>
</body>
</html>