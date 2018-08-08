<?php include("head.php") ?>

<form action="" method="post">
<table style="width:650px;">

    <tr>
        <td style="width:25px;">&nbsp;</td>
        <td style="width:250px;text-align:left;">&nbsp;</td>
        <td style="width:350px;text-align:left;">&nbsp;</td>
        <td style="width:25px;">&nbsp;</td>
    </tr>

    <tr>
        <td style="width:25px;">&nbsp;</td>
        <td style="width:250px;text-align:left;">
            <span style="font-weight:bold;font-size:medium;color:#3094CC;">CONTACT US</span>
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
        <td style="width:250px;text-align:left;">&nbsp;</td>
        <td style="width:350px;text-align:left;">&nbsp;</td>
        <td style="width:25px;">&nbsp;</td>
    </tr>

    <tr>
        <td style="width:25px;">&nbsp;</td>
        <td style="text-align:justify;" colspan="3">You can send your queries and feedback, 
            by using this form .</td>
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
        <td style="width:250px;text-align:left;">Name</td>
        <td style="width:350px;text-align:left;">
            <input type="text" name="t1" class="txt" placeholder=" Enter Your name Here" required>
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
        <td style="width:250px;text-align:left;">Email id</td>
        <td style="width:350px;text-align:left;">
            <input type="email" name="t2" class="txt" placeholder=" Enter Email ID" required>
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
        <td style="width:250px;text-align:left;">Contact</td>
        <td style="width:350px;text-align:left;">
            <input type="text" name="t3" class="txt" placeholder=" Enter Mobile No" maxlength="10" required>
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
        <td style="width:250px;text-align:left;">Message/ Query</td>
        <td style="width:350px;text-align:left;">
            <textarea name="t4" style="width:250px;height:80px;" placeholder=" Message / Query" required>
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
		$name = $_POST['t1'];
		$email = $_POST['t2'];
		$cntct = $_POST['t3'];
		$msg = $_POST['t4'];
		
		include("config.php");
		$q = "INSERT INTO feedback (name,email,contact,msg) VALUES ('$name','$email','$cntct','$msg')";
		$r = mysqli_query($con,$q);
		if($r > 0)
		{
			echo "<script>alert('Feedback Inserted Successfully');</script>";
		}
		else
		{
			echo "<script>alert('Error: Could not be Inserted');</script>";
		}
	}
	?>
        </td>
        <td style="width:25px;">&nbsp;</td>
    </tr>

</table>
</form>
<?php include("foot.php") ?>