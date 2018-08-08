<html>

<body>

<?php

$u = $_GET['id'];

if($u==0)
{ ?>

	<table style="font-size:12px;">
    <tr>
        <td style="width:25px;">&nbsp;</td>
        <td style="width:250px;text-align:left;">
            <span style="font-weight:bold;font-size:medium;color:gray;"> ADD NEWS</span>
        </td>
        <td style="width:350px;text-align:left;">&nbsp;</td>
        <td style="width:25px;">&nbsp;</td>
    </tr>

    <tr>
        <td style="width:25px;">&nbsp;</td>
        <td style="width:250px;text-align:left;">&nbsp;</td>
        <td style="width:350px;text-align:left;">&nbsp;</td>
        <td style="width:25px;">&nbsp;</td>
    </tr>

    <tr>
        <td style="width:25px;">&nbsp;</td>
        <td style="width:250px;text-align:left;">News Details</td>
        <td style="width:350px;text-align:left;">
            <textarea name="t1" style="width:250px;height:80px;" placeholder=" Message / Query" required>
            </textarea>
        </td>
        <td style="width:25px;">&nbsp;</td>
    </tr>

    <tr>
        <td style="width:25px;">&nbsp;</td>
        <td style="width:250px;text-align:left;">&nbsp;</td>
        <td style="width:350px;text-align:left;">&nbsp;</td>
        <td style="width:25px;">&nbsp;</td>
    </tr>

    <tr>
        <td style="width:25px;">&nbsp;</td>
        <td style="width:250px;text-align:left;">&nbsp;</td>
        <td style="width:350px;text-align:left;">&nbsp;</td>
        <td style="width:25px;">&nbsp;</td>
    </tr>

    <tr>
        <td style="width:25px;">&nbsp;</td>
        <td style="width:250px;text-align:left;">&nbsp;</td>
        <td style="width:350px;text-align:left;">
            <input type="submit" value="SUBMIT" name="s">
&nbsp;&nbsp;
            <input type="reset" value="RESET">
        </td>
        <td style="width:25px;">&nbsp;</td>
    </tr>

    <tr>
        <td style="width:25px;">&nbsp;</td>
        <td style="width:250px;text-align:left;">&nbsp;</td>
        <td style="width:350px;text-align:left;">&nbsp;</td>
        <td style="width:25px;">&nbsp;</td>
    </tr>

    <tr>
        <td style="width:25px;">&nbsp;</td>
        <td style="width:250px;text-align:left;">&nbsp;</td>
        <td style="width:350px;text-align:left;">
	<?php

	if(isset($_POST['s']))
	{
		$news = $_POST['t1'];
		
		include("../config.php");
		$q = "INSERT INTO newsTable (news) VALUES ('$news')";
		$r = mysqli_query($con,$q);
		if($r > 0)
		{
			echo "<script>alert('Added Successfully');</script>";
		}
		else
		{
			echo "<script>alert('Error: could not add');</script>";
		}
	}

	echo "</center>";

}
else
{
	echo "&nbsp;<span style='font-weight:bold;font-size:medium;color:gray;'> DELETE NEWS</span>";
	
	include("../config.php");

	$qq = "select * from newstable";
	$rr = mysqli_query($con,$qq) or die(mysqli_error());

	$cc = mysqli_num_rows($rr);
	if($cc > 0)
	{
		echo "<table border='1' width='100%' style='font-size:12px;'>";
		echo "<tr>";
		echo "<th>News Id</th><th> News Description </th><th> &nbsp; </th>";
		echo "</tr>";
		while($row = mysqli_fetch_array($rr))
		{
			echo "<tr>";
			echo "<td>".$row['nid']."</td>";
			echo "<td>".$row['news']."</td>";
			echo "<td> <a href='delNews.php?id=".$row['nid']."'> DELETE </a> </td>";			
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