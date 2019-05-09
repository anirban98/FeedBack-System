
<?php 
session_start();
include('connection.php');
$student = $_SESSION['student'];

if($student =="")
{
	header('location:index.php');
}
$query="SELECT * FROM `student` WHERE `University Roll Number` = '$student' ";
$s = mysqli_query($con,$query);
$students = mysqli_fetch_assoc($s);

?>

<?php
extract($_POST);
if(isset($sub))
{

$quest1 = $_POST['quest1'];
$quest2 = $_POST['quest2'];
$quest3 = $_POST['quest3'];
$quest4 = $_POST['quest4'];
$quest5 = $_POST['quest5'];
$quest6 = $_POST['quest6'];
$quest7 = $_POST['quest7'];
$quest8 = $_POST['quest8'];
$quest9 = $_POST['quest9'];
$quest10 = $_POST['quest10'];

$student = $_SESSION['student'];
echo $student;
$i=0;
for($i=0;$i<2;$i++)
	    {
if(isset($_POST['check'.$i.'']))
		{
$staff=$_POST['name'][$i];
echo $staff;
$query="SELECT * FROM `feedback` WHERE `student_id` = '$student' AND `faculty_id` = '$staff' ";
$sql = mysqli_query($con,$query);
$r=mysqli_num_rows($sql);

if($r==true)
{
	 ?>
		<script>
			alert('you have already given feedback to this faculty');
			window.open('facultyfeedback.php','_self');
		</script>
	<?php
}
else
{
	$query = "INSERT INTO `feedback`(`student_id`, `faculty_id`, `Teacher provide the course outline having weekly content plan`, `teacher is punctual`, `teacher is good at stimulating the interest in course content`, `explaining subject matter`, `presentation was clear,loud and easy to understand`, `good at using innovative teaching methods`, `available and helpful during counselling hours`, `teacher has completed the whole course as per course outline`, `always fair and impartial`, `encourage students for participating in extra curricular activit`) VALUES ('$student','$staff','$quest1','$quest2','$quest3','$quest4','$quest5','$quest6','$quest7','$quest8','$quest9','$quest10')";
	//echo $query;
    
	mysqli_query($con,$query);

	?>
	<script>
		alert('Thank you for your feedback');
		window.open('facultyfeedback.php','_self');
	</script>
	<?php
}
}
}
}
?>



<html>
<head>
<title>Feedback</title>
<style>
body {
	background-color: #ffffe0 ;
	}
div{
	border: 1px solid balck;
	background-color: #82b74b;
	padding-top: 05px;
	padding-right: 50px;
	padding-bottom: 05px;
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
.button {border-radius: 12px;
}
.btn-group button
{
	background-color: #82b74b;
	border: 1px #82b74b;
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
<div>
<div class="btn-group">
<a href="faculty_home.php"><h3 ><button >Back</button></h3></a>
<a href="logout.php"><h3 align="right"><button>Logout</button></h3></a>
</div>
<h1 style="Text-align:center; color:#fff8dc;">Staff Feedback</h1>
</div>
<body>
<h3 style="text-align:center; color:#333300">Please give your answer about the following question by circling the given grade on the scale:</h3>

<h3 style="text-align:center; color:#333300">5- Strongly Agree 4- Agree 3- Neutral 2- Disagree 1- Strongly Disagree</h3>
<form method="POST">
<table width="100%" style="table-layout:fixed margin-top:25px" border="1">
<tr>
<th>Select Faculty :</th>
<td>
<select name="staff">
	<?php
	$i=0;
		$sql = mysqli_query($con,"SELECT * FROM `staff` WHERE `Semester` = '".$students['Semester']."'");
		while($r=mysqli_fetch_assoc($sql))
		{
			echo"
						<tr>
							<td><center><input class='cen' type='text' name='name[]' value='".$r['Name']."' style='text-align:center'></center></td>
							<td><input type='checkbox' name='check".$i."' >select</td>

							</tr>
						";
						$i++;
		}
	?>
</select>
</td>
</tr>
</table>

<table width="100%" style="table-layout:fixed margin-top:25px" border="1">
<tr>
<td><b>1:</b> Teacher provided the course outline having weekly content plan with list of  required text book:</td>  
<td><input type="radio" name="quest1" value="5" required> 5
  <input type="radio" name="quest1" value="4">4
  <input type="radio" name="quest1" value="3"> 3
<input type="radio" name=" quest1" value="2">2
<input type="radio" name="quest1" value="1">1</td>
</tr>

<tr>
<td><b>2:</b> Teacher is punctual,arrives on time and leaves on time:</td>
<td> <input type="radio" name="quest2" value="5" required> 5
  <input type="radio" name="quest2" value="4">4
  <input type="radio" name="quest2" value="3"> 3
<input type="radio" name="quest2" value="2">2
<input type="radio" name="quest2" value="1">1
</td>
</tr>

<tr>
<td><b>3:</b> Teacher is good at stimulating the interest in the course content:</td>
<td> 
<input type="radio" name="quest3" value="5" required> 5
<input type="radio" name="quest3" value="4">4
  <input type="radio" name="quest3" value="3"> 3
<input type="radio" name="quest3" value="2">2
<input type="radio" name="quest3" value="1">1</td>
</tr>

<tr>
<td><b>4:</b> Teacher is good at explaining the subject matter:</td>
<td>
 <input type="radio" name="quest4" value="5" required> 5
  <input type="radio" name="quest4" value="4">4
  <input type="radio" name="quest4" value="3"> 3
<input type="radio" name=" quest4" value="2">2
<input type="radio" name="quest4" value="1">1</td>
</tr>

<tr><td>
<b>5:</b> Teacher's presentation was clear,loud ad easy to understand:</td>
<td> <input type="radio" name="quest5" value="5" required> 5
  <input type="radio" name="quest5" value="4">4
  <input type="radio" name="quest5" value="3"> 3
<input type="radio" name="quest5" value="2">2
<input type="radio" name="quest5" value="1">1</td>
</tr>

<tr>
<td>
<b>6:</b> Teacher is good at using innovative teaching methods/ways:</td><td> 
<input type="radio" name="quest6" value="5" required> 5
  <input type="radio" name="quest6" value="4">4
  <input type="radio" name="quest6" value="3">3
<input type="radio" name="quest6" value="2">2
<input type="radio" name="quest6" value="1">1</td>
</tr>

<tr>
<td>
<b>7:</b> Teacher is available and helpful during counseling hours:</td> 
<td><input type="radio" name="quest7" value="5" required>5
  <input type="radio" name="quest7" value="4">4
  <input type="radio" name="quest7" value="3"> 3
<input type="radio" name="quest7" value="2">2
<input type="radio" name="quest7" value="1">1</td>
</tr>

<tr>
<td>
<b>8:</b> Teacher has competed the whole course as per course outline:</td>
<td>
 <input type="radio" name="quest8" value="5" required> 5
  <input type="radio" name="quest8" value="4">4
  <input type="radio" name="quest8" value="3"> 3
<input type="radio" name="quest8" value="2">2
<input type="radio" name="quest8" value="1">1</td>
</tr>

<tr>
<td><b>9:</b>Teacher was always fair and impartial:</td>
<td>
 <input type="radio" name="quest9" value="5" required> 5
  <input type="radio" name="quest9" value="4">4
  <input type="radio" name="quest9" value="3"> 3
<input type="radio" name="quest9" value="2">2
<input type="radio" name="quest9" value="1">1</td>
</tr>

<tr>
<td><b>10:</b>Teacher encourage students for participating in extra curricular activities:</td>
<td>
 <input type="radio" name="quest10" value="5" required> 5
  <input type="radio" name="quest10" value="4">4
  <input type="radio" name="quest10" value="3"> 3
<input type="radio" name="quest10" value="2">2
<input type="radio" name="quest10" value="1">1</td>
</tr>

<tr>
<td align="center" colspan="2"><button class="button button"type="submit" name="sub">Submit</button>
</td>
</tr>
</table>

</form>



</body>
</html>
