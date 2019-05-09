



<!DOCTYPE html>
<html>
<head>
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
ul{
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color:#82b74b ;
}
li{
	float: left;
}
li a, .dropbtn{
	display: inline-block;
	color: white;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
}
li a:hover, .dropdown:hover
.dropbtn{
	background-color: #006600;
}
li.dropdown{
	display: inline-block;
}
.dropdown-content{
	display: none;
	position: absolute;
	background-color: #f9f9f9;
	min-width:10px;
	box-shadow: 0px 8px 16px 0px 
	rgba(0,0,0,0.2);
	z-index:1;
}
.dropdown-content a{
	color: black;
	padding: 10px 08px;
	text-decoration: none;
	display: block;
	text-align: center;
}
.dropdown-content a:hover{
	background-color: #f1f1f1;
}
.dropdown:hover .dropdown-content
{
	display:block;
}
</style>
</head>
<body>
<div ><h1 style="Text-align:center; color:#fff8dc;">Admin Dashboard</h1>
<ul>
<li><a href="homeAdmin.php">Home</a></li>
<li class="dropdown">
<a href="#" class="dropbtn">Faculty</a>
<div class="dropdown-content">
<a href="addStaff.php">Add Faculty</a>
<a href="ManageFaculty.php">Manage Faculty</a>
</div>
</li>
<li class="dropdown">
<a href="#" class="dropbtn">Student</a>
<div class="dropdown-content">
<a href="AddStudent.php">Add Student</a>
<a href="manageStudent.php">Manage Student</a>
</div>
</li>
<li class="dropdown">
<a href="admin_show_feedback.php" >Feedback</a>
</a>
</li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>


<br/><br/><br/>


<?php 
								@$id=$_GET['id'];
								@$info=$_GET['info'];
								if($info!="")
								{
									if($info=="add_faculty")
										{
											include('add_faculty.php');
										}
										
									elseif($info=="show_faculty")
										{
											include('show_faculty.php');
										}
										
										
									elseif($info=="edit_faculty")
										{
											include('edit_faculty.php');
										}	
										
									elseif($info=="display_student")
										{
											include('display_student.php');
										}
									
										
										
									elseif($info=="contact")
										{
											include('contact.php');
										}	
									elseif($info=="feedback")
										{
											include('feedback.php');
										}
										elseif($info=="feedback_average")
										{
											include('feedback_average.php');
										}		
										
										
									
										
										
										
										else if($info=="update_password")
										{
										include('update_password.php');
										}
									
								}
								else
								{
								include('dashboard_home.php');
								}
							
							
							?>



</body>
</html>