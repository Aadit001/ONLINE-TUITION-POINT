<?php include("head.php") ?>

<form action="" method="post">
<?php

	$uid = $_GET['id'];
	$tid = $_GET['tid'];
	$name = $_GET['n'];
	$qualification = $_GET['q'];

	include("../config.php");
	$q = "SELECT * FROM form WHERE uid='$uid'";
	$r = mysqli_query($con,$q);
	$counter = mysqli_num_rows($r);
	if($counter > 0)
	{
		echo "<center><h3><u> Apply Tution Page </u></h3>";
		echo "<table width='600px'>";

		echo "<tr>";
		echo "<th> Tutor Id </th>";
		echo "<th> &nbsp; </th>";
		echo "<td> ".$tid." </td>";
		echo "</tr>";

		echo "<tr>";
		echo "<th> Tutor Name </th>";
		echo "<th> &nbsp; </th>";
		echo "<td> ".$name." </td>";
		echo "</tr>";

		echo "<tr>";
		echo "<th> Qualification </th>";
		echo "<th> &nbsp; </th>";
		echo "<td> ".$qualification." </td>";
		echo "</tr>";

		echo "<tr>";
		echo "<th> Choose Form ID </th>";
		echo "<th> &nbsp; </th>";
		echo "<td> <select name='frm'>";
		while($row = mysqli_fetch_array($r))
		{
			echo "<option>".$row['fid']."</option>";
		}
		echo "</select></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th> &nbsp; </th>";
		echo "<th> &nbsp; </th>";
		echo "<th> &nbsp; </th>";

		echo "</tr>";
		echo "<tr>";
		echo "<th> &nbsp; </th>";
		echo "<th> &nbsp; </th>";
		echo "<td> <input type='submit' value='Apply For It' name='s'> </td>";
		echo "</tr>";

if(isset($_POST['s']))
{
		$fid = $_POST['frm'];

		$q1 = "SELECT * FROM apply WHERE fid='$fid'";
		$r1 = mysqli_query($con,$q1); or die(mysqli_error());
		$c1 = mysqli_num_rows($r1);
			
		if($c1 > 0)
		{
			echo "<script>alert('You have already applied from this Form, So Kindly wait for the admin response')</script>";
		}
		else
		{
			$q2 = "INSERT INTO apply (fid,tid,uid) VALUES ('$fid','$tid','$uid')";
			$r2 = mysqli_query($con,$q2);
			echo "<script>alert('Successfully Applied')</script>";
		}
}
		echo "<tr>";
		echo "<th> &nbsp; </th>";
		echo "<th> &nbsp; </th>";
		echo "<th> &nbsp; </th>";
		echo "</tr>";

		echo "</table></center>";
	}
	else
	{
		echo "You have not filled a form yet, So Hurry up & Filled Form to get the Tutor!!!!";
	}

?>

</form>

<?php
	include("foot.php");
?>