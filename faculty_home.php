<?php 
session_start();
include('dbconnection.php');

$student= $_SESSION['student'];

if($student=="")
{
	header('location:index.php');
}

$sql=mysqli_query($con,"SELECT * FROM `student` WHERE `University Roll Number` = '$student' ");
$students=mysqli_fetch_assoc($sql);
//print_r($users);
?>
<!DOCTYPE html>

  <html>
  
  <head>
  <style>
  body {
	background-color: #ffffe0 ;
	}
div{
	border: 2px solid balck;
	background-color: #82b74b;
	padding-top: 05px;
	padding-right: 50px;
	padding-bottom: 15px;
	padding-left: 100px;
}
.btn-group button
{
	background-color: #82b74b;
	border: 1px #006600;
	color: #ffffe0;
	padding: 08px 20px;
	cursor: pointer;
	float: left;
}
.btn-group:after{
	content:"";
	clear: both;
	display:table;
	
}
.btn-group button:not(last-child)
{
	border-right: none;
	
}
.btn-group button:hover{
	background-color:#006600;
	
}
  </style>
  </head>
  
  <body>
  
  <div><h1 style="text-align:center ; color:#ffffe0">Dashboard</h1>
<div class="btn-group">
<a href="faculty_home.php"><button><h3>Home</h3></button></a>
<a href="facultyfeedback.php"><button><h3>Feedback</h3></button></a>

<a href="logout.php"><button><h3>Logout</h3></button></a>
</div>
  </div>
  <br/>
  
			  
				<h1 style="text-align: center ; color:#333300"> Faculty Feedback System</h1>
				<h1 style="text-align: center ; color:#333300"> Hello <?php echo $students['Name']; ?> </h1>
				
		
  
  		
  </body>
  </html>
		 
		  

        
  