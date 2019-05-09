<?php
include('dbconnection.php');
	
	$info=$_GET['id'];
	$q = "DELETE FROM `student` WHERE `id`='$info';";
	$run = mysqli_query($con,$q);
	
	if($run == true)
	{
		?>
		<script>
			alert('data deleted successfully.');
			window.open('manageStudent.php','_self');
		</script>
		<?php
	}
					
	
?>