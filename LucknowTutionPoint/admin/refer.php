<?php

	$id = $_GET['id'];

	include("../config.php");

	$q = "UPDATE apply SET refer='1' WHERE id='$id'";
	$r  = mysqli_query($con,$q);
	if($r > 0)
	{
		echo "<script>alert('Refered Successfully');window.location='deal.php';</script>";
	}
?>