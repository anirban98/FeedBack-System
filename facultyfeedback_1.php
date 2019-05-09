


<?php
extract($_POST);
if(isset($sub))
{
	
	$user = $_SESSION['user'];
	$sql = mysqli_query($con,"SELECT * FROM `feedback` WHERE `student_id` = '$user' AND `faculty_id` ='$faculty'");
	$r=mysqli_num_rows($sql);

	if($r==true)
	{
		?>
			<script>
				alert('you have already given feedback to this faculty');
				window.open('facultyfeedback_1.php','_self');
			</script>
		<?php
	}
	else
	{
		$query = "INSERT INTO `feedback` VALUES('$user', '$faculty', '$quest1', '$quest2', '$quest3', '$quest4', '$quest5', '$quest6', '$quest7', '$quest8', '$quest9', '$quest10',now())";
		mysqli_query($con,$query);
	
	
			?>
				<script>
					alert('Thank you for your feedback');
					window.open('facultyfeedback_1.php','_self');
				</script>
			<?php
	
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
	background-color: #20B2AA;
	padding-top: 20px;
	padding-right: 50px;
	padding-bottom: 30px;
	padding-left: 100px;
}

.button {
	background-color: #20B2AA;
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
<a href="logout.php"><h3 style="text-align:left"><button  class="button button">Logout</button></h3></a>
<h1 style="Text-align:center; color:#fff8dc;">Staff Feedback</h1>
</div>
<body>
<h3 style="text-align:center; color:#008080">Please give your answer about the following question by circling the given grade on the scale:</h3>

<h3 style="text-align:center; color:#008080">5- Strongly Agree 4- Agree 3- Neutral 2- Disagree 1- Strongly Disagree</h3>
<table width="100%" style="table-layout:fixed margin-top:25px" border="1">
<tr>
<th>Select Faculty :</th>
<td>
<select name="faculty">
	<?php
		$sql = mysqli_query($con,"SELECT * FROM `staff` WHERE `Semester` = '".$users['Semester']."' AND `Course` = '".$users['Course']."'");
		while($r=mysqli_fetch_array($sql))
		{
			echo "<option value='".$r['Email']."'>".$r['Name']."</option>";
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
</table>
<h3 style="text-align:center"><button name="sub" class="button button">Submit</button></h3>



</body>
</html>


