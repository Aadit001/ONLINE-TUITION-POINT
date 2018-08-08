<?php

	$id = $_GET['id'];

	include("../config.php");

	$q = "UPDATE apply SET tstatus='Alloted' WHERE id='$id'";
	$r  = mysqli_query($con,$q);
	if($r > 0)
	{
		echo "<script>alert('Alloted Successfully');window.location='tutorStatus.php';</script>";
	}
?>