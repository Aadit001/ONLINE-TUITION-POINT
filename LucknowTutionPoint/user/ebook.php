<?php include("head.php") ?>

<div style="width:650px;font-size:14px;text-align:justify;">

<span style="font-weight:bold;font-size:Medium;color:#3094CC"> &nbsp;E-Books Panel </span> <br />

<img src="../images/line.jpg" />

<table style="width:650px;">

<tr>

	<td style="width:25px;">&nbsp;</td>
	<td style="width:600px;">&nbsp;</td>
	<td style="width:25px;">&nbsp;</td>

</tr>
<tr>

	<td style="width:25px;">&nbsp;</td>

	<td style="width:600px;">

	<?php

	include("../config.php");

	$qq = "select * from book";

	$rr = mysqli_query($con,$qq) or die(mysqli_error());

	$cc = mysqli_num_rows($rr);

	if($cc > 0)
	{
		echo "<table border='1' width='100%'>";
		echo "<tr style='background-color:brown;color:white;'>";
		echo "<th>Book Name</th><th> Author </th><th> Action </th>";
		echo "</tr>";
		while($row = mysqli_fetch_array($rr))
		{
			echo "<tr>";
			echo "<td>".$row[1]."</td>";
			echo "<td>".$row[2]."</td>";
			echo "<td> <a href='../admin/".$row[3]."'> Download </a> </td>";			
			echo "</tr>";
		}
		echo "</table>";
	}
	else
	{
		echo "<script>alert('No data to display')</script>";
	}

	?>

	</div>

	</td>
	<td style="width:25px;">&nbsp;</td>

</tr>
<tr>

	<td style="width:25px;">&nbsp;</td>
	<td style="width:600px;">&nbsp;</td>
	<td style="width:25px;">&nbsp;</td>

</tr>
</table>

</div>

<?php include("foot.php") ?>