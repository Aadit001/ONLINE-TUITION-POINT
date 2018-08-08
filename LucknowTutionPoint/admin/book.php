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
            <span style="font-weight:bold;font-size:medium;color:#3094CC;">E-Book Panel</span>
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
        <td style="width:250px;text-align:left;">Book Name</td>
        <td style="width:350px;text-align:left;">
            <input type="text" name="t1" class="txt" placeholder=" Enter Book Title Here" required>
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
        <td style="width:250px;text-align:left;">Author Name</td>
        <td style="width:350px;text-align:left;">
            <input type="text" name="t2" class="txt" placeholder=" Enter Author Name Here" required>
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
        <td style="width:250px;text-align:left;">Browse a File</td>
        <td style="width:350px;text-align:left;">
            <input type="file" name="t3" required>
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

		include("../config.php");

		$bname = $_POST['t1'];
		$author = $_POST['t2'];

		move_uploaded_file($_FILES['t3']['tmp_name'],"book/".$_FILES['t3']['name']);
		$book = "stu/".$_FILES['t3']['name'];

		$q = "INSERT INTO book (bname,author,file) VALUES ('$bname','$author','$book')";
		$r = mysqli_query($con,$q);
		if($r > 0)
		{
			echo "<script>alert('Book Added Successfully');</script>";
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