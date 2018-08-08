<?php include("head.php") ?>

<div style="width:650px;font-size:14px;text-align:justify;">

<span style="font-weight:bold;font-size:Medium;color:#3094CC"> &nbsp;Allot Tutions </span> <br />

<img src="../images/line.jpg" />

<?php

	echo "<center><h3> Tution Allotment Page </h3>";
	include("../config.php");

	$q1 = "SELECT * FROM apply";
	$r1  = mysqli_query($con,$q);
	$c1 = mysqli_num_rows($r1);
	if($c1 > 0)
	{
		echo "<table border='1' width='600px'>";
		echo "<tr>";
		echo "<th> Form Id </th>";
		echo "<th> Tutor Id </th>";
		echo "<th> Refer </th>";
		echo "<th> Tutor Status </th>";
		echo "<th> Action </th>";
		echo "</tr>";
		while($row1 = mysqli_fetch_array($r1))
		{
			echo "<tr>";
			echo "<td style='text-align:center;'> ".$row1['fid']." </td>";
			echo "<td style='text-align:center;'> ".$row1['tid']." </td>";
			if($row1['refer'] == 0)
			{
				echo "<td style='text-align:center;'> <a href='refer.php?id=".$row1['id']."' style='color:blue;'> Refer </a> </td>";
			}
			else
			{
				echo "<td style='text-align:center;color:green;'> Refered </td>";
			}

			if($row1['tstatus'] == "Pending")
			{
				echo "<td style='text-align:center;color:red;'> In Process </td>";
			}
			else
			{
				echo "<td style='text-align:center;color:green;'> ".$row1['tstatus']." </td>";
			}

			if($row1['tstatus'] == "Pending")
			{
				echo "<td style='text-align:center;color:red;'> Waiting For Tutor Response </td>";
			}
			else if($row1['status'] == "Alloted")
			{
				echo "<td style='text-align:center;color:green;'> ".$row1['tstatus']." </td>";
			}
			else
			{
				echo "<td style='text-align:center;'> <a href='update.php?id=".$row1['id']."' style='color:blue;'> Update</a> </td>";
			}
			echo "</tr>";
		}
		echo "</table></center>";
	}
	else
	{
		echo "<script> alert('You have not applied for any Tution Yet !!!!') </script>";
	}

?>

</div>

<?php include("foot.php") ?>