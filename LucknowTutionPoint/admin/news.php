<?php include("head1.php") ?>
<script>

function a(str)
{
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();	
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function ()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("show").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","chkNews.php?id="+str,true);
	xmlhttp.send();
}
</script>

<?php include("head2.php") ?>

<form action="" method="post">
<table style="width:650px;font-size:12px;">

    <tr>
        <td style="width:25px;">&nbsp;</td>
        <td style="width:250px;text-align:left;">&nbsp;</td>
        <td style="width:350px;text-align:left;">&nbsp;</td>
        <td style="width:25px;">&nbsp;</td>
    </tr>

    <tr>
        <td style="width:25px;">&nbsp;</td>
        <td style="width:250px;text-align:left;">
            <span style="font-weight:bold;font-size:medium;color:#3094CC;">NEWS PANEL</span>
        </td>
        <td style="width:350px;text-align:left;">&nbsp;</td>
        <td style="width:25px;">&nbsp;</td>
    </tr>

    <tr>
        <td style="width:25px;">&nbsp;</td>
        <td style="text-align:left;" colspan="3"><hr /></td>
        <td style="width:25px;">&nbsp;</td>
    </tr>

    <tr>
        <td style="width:25px;">&nbsp;</td>
        <td style="text-align:left;" colspan="3">
	<input type="radio" value="0" name="ch" onchange="a(this.value)"> Add News
	<input type="radio" value="1" name="ch" onchange="a(this.value)"> Delete News
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
    	<td colspan="4">

    <div id="show">
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
		$r = mysql_query($q);
		if($r > 0)
		{
			echo "<script>alert('Added Successfully');</script>";
		}
		else
		{
			echo "<script>alert('Error: could not add');</script>";
		}
	}

	?>
        </td>
        <td style="width:25px;">&nbsp;</td>
    </tr>

	</table>

    </div>

    	</td>
    </tr>

</table>

<?php include("foot.php") ?>