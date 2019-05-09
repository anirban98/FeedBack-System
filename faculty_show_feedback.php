
<?php 
session_start();
include('dbconnection.php');
error_reporting(1);

$staff= $_SESSION['staff'];
if($staff=="")
{
	header('index.php');
}

$sql=mysqli_query($con,"SELECT * FROM `staff` WHERE `Name` = '$user' ");
$users=mysqli_fetch_assoc($sql);
?>


<?php 
include('dbconnection.php');

$q=mysqli_query($con,"SELECT * FROM `feedback` WHERE `faculty_id` = '".$_SESSION['staff']."'");
$r=mysqli_num_rows($q);
if($r==false)
{
echo "<h3 style='color:Red'>No any records found ! </h3>";
}
else
{
?>


<html>
<head>
<style>

body {
	background-color: #ffffe0 ;
	}
div{
	border: 2px solid balck;
	background-color: #82b74b;
	padding-top: 25px;
	padding-right: 50px;
	padding-bottom: 50px;
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
<div>
<a href="logout.php"><h3 align="right"><button class="button button">Logout</button></h3></a>
		<h1 class="col-sm-12" style="color:#fff8dc;" align="center" >Feedback</h1>
</div>

<table class="table table-bordered" align="center" border="1" style="margin-top:25px">

	<thead >
	
	<tr class="success">
		<th>Sr.No</th>
		<th>Student</th>
		<th>Teacher</th>
		<th>Teacher provided the course outline having weekly content plan with list of  required text book</th>
		<th>Teacher is punctual,arrives on time and leaves on time</th>
		<th>Teacher is good at stimulating the interest in the course content</th>
		<th>Teacher is good at explaining the subject matter</th>
		<th>Teacher's presentation was clear,loud ad easy to understand</th>
		<th>Teacher is good at using innovative teaching methods/ways</th>
		<th>Teacher is available and helpful during counseling hours</th>
		<th>Teacher has competed the whole course as per course outline</th>
		<th>Teacher was always fair and impartial</th>
		<th>Teacher encourage students for participating in extra curricular activities</th>
		
		</tr>
		</thead>
		
		<?php
		$i=1;
	while($row=mysqli_fetch_array($q))
		{
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row[1]."</td>";
			echo "<td>".$row[2]."</td>";
			echo "<td>".$row[3]."</td>";
			echo "<td>".$row[4]."</td>";
			echo "<td>".$row[5]."</td>";
			echo "<td>".$row[6]."</td>";
			echo "<td>".$row[7]."</td>";
			echo "<td>".$row[8]."</td>";
			echo "<td>".$row[9]."</td>";
			echo "<td>".$row[10]."</td>";
			echo "<td>".$row[11]."</td>";
			echo "<td>".$row[12]."</td>";
			
			echo "</tr>";
		$i++;
		}
		
		?>
		
	
		
</table>
</div>
</div>
</html>
<?php }?>