<?php
include('dbconnection.php');

if(isset($_POST['login']))
{
	$adName = $_POST['Username'];
	$adPass = $_POST['Password'];
	$adlog = $_POST['login'];

	$con = mysqli_connect('localhost','root','','feedback');
	$qry1 = "SELECT * FROM `admin` WHERE username='$adName' and password='$adPass'";

	$run = mysqli_query($con,$qry1);

	$row = mysqli_num_rows($run);
	if($row <1)
	{
		?>
		<script>
		alert("username or password is incorrect");
		window.open('admin.php','_self');
		</script>
		<?php

		
	}
	else
	{
		$data = mysqli_fetch_assoc($run);
		session_start();
		header('homeAdmin.php');
	}
}

?>