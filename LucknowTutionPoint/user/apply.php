<?php include("head.php") ?>
<?php
	echo "<center><h3>".$area." Tutor Details </h3>";
	include("../config.php");

	$q1 = "SELECT * FROM tutor WHERE area='$area'";
	$r1  = mysqli_query($con,$q1);
	$c1 = mysqli_num_rows($r1);
	if($c1 > 0)
	{
		$c = 1;
		echo "<table border='1' width='600px'>";
		echo "<tr>";
		echo "<th> Sr No </th>";
		echo "<th> Name </th>";
		echo "<th> Qualification </th>";
		echo "<th> Picture </th>";
		echo "<th> Action </th>";
		echo "</tr>";
		while($row1 = mysqli_fetch_array($r1))
		{
			echo "<tr>";
			echo "<td style='text-align:center;'> ".$c.") </td>";
			echo "<td style='text-align:center;'> ".$row1['name']." </td>";
			echo "<td style='text-align:center;'> ".$row1['degree']." </td>";
			echo "<td style='text-align:center;'> <img src='../".$row1['pic']."' width='100px' height='100px'> </td>";
			echo "<td style='text-align:center;'> <a href='applyForm.php?id=".$u."&tid=".$row1['tid']."&n=".$row1['name']."&q=".$row1['degree']."' style='color:blue;'> Apply </a> </td>";
			echo "</tr>";
			++$c;
		}
		echo "</table></center>";
	}
	else
	{
		echo "No Tutor Found From your area, <a href='view.php'> Click Here </a> to try with other area Tutors";
	}
?>

<?php include("foot.php") ?>