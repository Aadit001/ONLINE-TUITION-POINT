<?php include("head.php") ?>

<form action="" method="post" enctype="multipart/form-data">
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
            <span style="font-weight:bold;font-size:medium;color:#3094CC;">TUTOR REGISTRATION</span>
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
        <td style="text-align:justify;" colspan="3">You can find appropriate tution near to your area, by just a short registration.</td>
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
        <td style="width:250px;text-align:left;">User Name</td>
        <td style="width:350px;text-align:left;">
            <input type="text" name="t1" class="txt" placeholder=" Enter Your Username Here" required>
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
        <td style="width:250px;text-align:left;">Password</td>
        <td style="width:350px;text-align:left;">
            <input type="password" name="t2" class="txt" placeholder=" Enter Your Password Here" required>
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
        <td style="width:250px;text-align:left;">Name</td>
        <td style="width:350px;text-align:left;">
            <input type="text" name="t3" class="txt" placeholder=" Enter Your Name Here" required>
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
        <td style="width:250px;text-align:left;">Gender</td>
        <td style="width:350px;text-align:left;">
            <input type="radio" name="t4" value="M"> Male
            <input type="radio" name="t4" value="F"> Female
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
        <td style="width:250px;text-align:left;">Area</td>
        <td style="width:350px;text-align:left;" class="txt">
            <select name="t5" class="txt" required>
	<option>Choose Area</option>
	<option>Aliganj</option>
	<option>Indira Nagar</option>
	<option>Janki Puram</option>
	<option>Kalyanpur</option>
	<option>Khurram Nagar</option>
	<option>Vikas Nagar</option>
            </select>
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
        <td style="width:250px;text-align:left;">Qualification</td>
        <td style="width:350px;text-align:left;" class="txt">
            <select name="t6" class="txt" required>
	<option>Choose Qualification</option>
	<option>UG</option>
	<option>PG</option>
	<option>Other</option>
            </select>
        </td>
        <td style="width:25px;">&nbsp;</td>
    </tr>
    <tr>
        <td style="width:25px;">&nbsp;</td>
        <td style="width:250px;text-align:left;">Address</td>
        <td style="width:350px;text-align:left;">
            <textarea name="t7" style="width:250px;height:80px;" placeholder=" Your Address here" required>
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
        <td style="width:250px;text-align:left;">Browse your Picture</td>
        <td style="width:350px;text-align:left;">
            <input type="file" name="t8" required>
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
$u = $_POST['t1'];
$p = $_POST['t2'];
$n = $_POST['t3'];
$g = $_POST['t4'];
$area = $_POST['t5'];
$deg = $_POST['t6'];
$address = $_POST['t7'];

move_uploaded_file($_FILES['t8']['tmp_name'],"upload/".$_FILES['t8']['name']);
$pic = "upload/".$_FILES['t8']['name'];

		include("config.php");
		$q = "INSERT INTO tutor (tid,pass,name,gender,area,degree,address,pic) VALUES ('$u','$p','$n','$g','$area','$deg','$address','$pic')";
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

	?>
        </td>
        <td style="width:25px;">&nbsp;</td>
    </tr>

</table>

<?php include("foot.php") ?>