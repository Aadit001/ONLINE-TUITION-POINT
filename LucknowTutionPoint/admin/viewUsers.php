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
	xmlhttp.open("GET","chkUsers.php?id="+str,true);
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
            <span style="font-weight:bold;font-size:medium;color:#3094CC;"> VIEW USERS </span>
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
	<input type="radio" value="0" name="ch" onchange="a(this.value)"> View Form Details
	<input type="radio" value="1" name="ch" onchange="a(this.value)"> View Tutor Details
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

	<h2> Check Radio Button to View Form or Tutor Details. </h2>

    </div>
    	</td>
    </tr>

</table>

<?php include("foot.php") ?>