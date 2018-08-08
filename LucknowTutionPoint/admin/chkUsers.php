<html>

<body>

<?php

$u = $_GET['id'];

if($u==0)
{	echo "&nbsp;<span style='font-weight:bold;font-size:medium;color:gray;'> VIEW Forms</span><center>";
	
	include("../config.php");

	$qq = "select * from form";
	$rr = mysqli_query($con,$qq) or die(mysqli_error());

	$cc = mysqli_num_rows($rr);
	if($cc > 0)
	{
		echo "<table border='1' width='100%' style='font-size:12px;'>";
		echo "<tr>";
		echo "<th>Form Id</th><th> Name </th><th> Class </th><th> Area </th><th> Fee Range </th><th> Picture </th>";
		echo "</tr>";
		while($row = mysqli_fetch_array($rr))
		{
			echo "<tr>";
			echo "<td>".$row['fid']."</td>";
			echo "<td>".$row['name']."</td>";
 			echo "<td>".$row['class']."</td>";
			echo "<td>".$row['area']."</td>";
			echo "<td>".$row['fee1']." To ".$row['fee2']."</td>";
			echo "<td> <img src='../user/".$row['pic']."' width='120px' height='120px'></td>";
			echo "</tr>";
		}

	}
	else
	{
		echo "<script>alert('No data to display')</script>";
	}

	echo "</center>";

}
else
{
	echo "&nbsp;<span style='font-weight:bold;font-size:medium;color:gray;'> VIEW TUTOR</span>";
	
	include("../config.php");

	$qq = "select * from tutor";
	$rr = mysqli_query($con,$qq) or die(mysqli_error());

	$cc = mysqli_num_rows($rr);
	if($cc > 0)
	{
		echo "<table border='1' width='100%' style='font-size:12px;'>";
		echo "<tr>";
		echo "<th>Tutor Id</th><th> Password </th><th> Name </th><th> Area </th><th> Picture </th>";
		echo "</tr>";
		while($row = mysqli_fetch_array($rr))
		{
			echo "<tr>";
			echo "<td>".$row['tid']."</td>";
			echo "<td>".$row['pass']."</td>";
 			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['area']."</td>";
			echo "<td> <img src='../".$row['pic']."' width='120px' height='120px'></td>";
			echo "</tr>";
		}

	}
	else
	{
		echo "<script>alert('No data to display')</script>";
	}
}

?>

</body>

</html>