<?php
	include('../dbconnection.php');
	session_start();
	extract($_POST);
	if(isset($login))
	{
$que=mysqli_query($con,"SELECT `username`, `password` FROM `admin` WHERE username ='$email' and pass='$pass'");
		$row=mysqli_num_rows($que);
		if($row)
			{	
				$_SESSION['user']=$email;
				header('location:dashboard.php');
			}
		else
			{
				$err="<font color='red'>Wrong Email or Password !</font>";
			}
	}
?>

<!DOCTYPE html>
<html>

<head>

    <title>Admin !</title>
	<style>
	body {
	background-color: #ffffe0 ;
	}
div{
	border: 1px solid balck;
	background-color:#20B2AA;
	padding-top: 25px;
	padding-right: 50px;
	padding-bottom: 65px;
	padding-left: 100px;
}
.button {
	background-color: #20B2AA;
	border:none;
	color:#fff8dc;
	text-align: center;
	padding:15pxx 32px;
	text-decoration:none;
	display:inline-block;
	font-size: 25px;
	cursor: pointer;
	
}

.button {border-radius: 12px;}
	</style>

</head>

<body>

<div style="text-align:center; color:#fff8dc">Admin Login</div>
	<form method="post">
                            
                               
   <input class="form-control" name="email" type="email" autofocus required placeholder="E-mail">
                               
   <input class="form-control" placeholder="Password" name="pass" type="password" required>
                               
                                
                        
    </form>
                   


</body>

</html>
