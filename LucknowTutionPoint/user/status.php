<?php include("head.php") ?>
<?php
	echo "<center><h3> Check Status Page </h3>";
	include("../config.php");

	$q1 = "SELECT * FROM apply WHERE uid='$u'";
	$r1  = mysqli_query($con,$q1);
	$c1 = mysqli_num_rows($r1);
	if($c1 > 0)
	{
		$c = 1;
		echo "<table border='1' width='600px'>";
		echo "<tr>";
		echo "<th> Sr No </th>";
		echo "<th> Form Id </th>";
		echo "<th> Tutor Id </th>";
		echo "<th> Tutor Status </th>";
		echo "<th> Admin Status </th>";
		echo "</tr>";
		while($row1 = mysqli_fetch_array($r1))
		{
			echo "<tr>";
			echo "<td style='text-align:center;'> ".$c.") </td>";
			echo "<td style='text-align:center;'> ".$row1['fid']." </td>";
			echo "<td style='text-align:center;'> ".$row1['tid']." </td>";
			echo "<td style='text-align:center;color:red;'> ".$row1['status']." </td>";
			echo "<td style='text-align:center;color:red;'> ".$row1['tstatus']." </td>";
			echo "</tr>";
			++$c;
		}
		echo "</table></center>";
	}
	else
	{
		echo "<script> alert('You have not applied for any Tution Yet !!!!') </script>";
	}
?>

<?php include("foot.php") ?>