
<?php 
include('dbconnection.php');
//all complaints
$qq=mysqli_query($con,"SELECT * FROM `staff`");
$rows=mysqli_num_rows($qq);			
echo "<h2 style='color:green' align='center'>Total Number of Faculty : $rows</h2>";	

//all emegency compalints
$q=mysqli_query($con,"SELECT * FROM `student`");
$r1=mysqli_num_rows($q);			
echo "<h2 style='color:orange' align='center'>Total Number of Student : $r1</h2>";	


//all users
$q2=mysqli_query($con,"SELECT * FROM `feedback`");
$r2=mysqli_num_rows($q2);			
echo "<h2 style='color:black' align='center'>Total Number feedback given by users  : $r2</h2>";	


					

?>
