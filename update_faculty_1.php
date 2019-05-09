<?php

include('dbconnection.php');
	
		$name = $_POST['name'];
		$des = $_POST['des'];
		$course = $_POST['course'];
		$sem = $_POST['sem'];
		$sub = $_POST['sub'];
		$code = $_POST['code'];
	
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$mobile = $_POST['mob'];
		$id = $_POST['id'];
		
		
			$qry = "UPDATE `staff` SET `Name`='$name',`Designation`='$des',`Course`='$course',`Semester`='$sem',`Subject`='$sub',`Subject Code`='$code',`Email`='$email',`Password`='$pass',`Mobile Number`='$mobile' WHERE `id`=$id; ";
			$run = mysqli_query($con,$qry);
				
			if($run == true)
			{
				?>
				<script>
					alert('data updated successfully.');
					window.open('ManageFaculty.php?id=<?php echo $id; ?>','_self');
				</script>
				<?php
			}
					
		
		
?>