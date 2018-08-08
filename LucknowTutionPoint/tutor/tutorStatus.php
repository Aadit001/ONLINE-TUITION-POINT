<?php include("head.php") ?>

<div style="width:650px;font-size:14px;text-align:justify;">

<span style="font-weight:bold;font-size:Medium;color:#3094CC"> &nbsp;Tution Inquiry Status </span> <br />

<img src="../images/line.jpg" />

<?php

	echo "<center><h3> Tution Allotment Page </h3>";
	include("../config.php");

	$q1 = "SELECT * FROM apply WHERE refer='1' and tid='$u'";
	$r1  = mysqli_query($con,$q1);
	$c1 = mysqli_num_rows($r1);
	if($c1 > 0)
	{
		echo "<table border='1' width='600px'>";
		echo "<tr>";
		echo "<th> Form Id </th>";
		echo "<th> Admin Status </th>";
		echo "<th> Action </th>";
		echo "</tr>";
		while($row1 = mysqli_fetch_array($r1))
		{
			echo "<tr>";
			echo "<td style='text-align:center;'> <a href=''forms.php?id=".$row1['fid']."> ".$row1['fid']." </a> </td>";

			if($row1['status'] == "Pending")
			{
				echo "<td style='text-align:center;color:red;'> In Process </td>";
			}
			else
			{
				echo "<td style='text-align:center;color:green;'> ".$row1['status']." </td>";
			}

			if($row1['tstatus'] == "Pending")
			{
				echo "<td style='text-align:center;'> <a href='update.php?id=".$row1['id']."' style='color:blue;'> Update </a> </td>";
			}
			else
			{
				echo "<td style='text-align:center;color:green;'> ".$row1['tstatus']." </td>";
			}

			echo "</tr>";
		}
		echo "</table></center>";
	}
	else
	{
		echo "<script> alert('Sorry No Inquiry as Yet !!!!') </script>";
	}

?>

</div>

<?php include("foot.php") ?>