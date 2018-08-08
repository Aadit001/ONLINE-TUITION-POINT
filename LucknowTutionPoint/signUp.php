<html>
<head>
<style>

.head{
	font-size:25px;
	font-weight:bold;
}
.txt{
	font-size:16px;
	width:300px;
	height:50px;
	border:1px solid brown;
	border-radius:5px 5px 5px 5px;
}
.btn{
	background-color:brown;
	color:white;
	width:145px;
	height:35px;
	font-size:16px;
	border:1px solid brown;
	border-radius:5px 5px 5px 5px;
}

</style>
</head>
<body>
<center>

	<div style="width:400px;border:1px solid brown;border-radius:20px 20px 20px 20px;">
                        
	           <form name="f" method="post" action="">
	           <table>
		<tr>
			<td style="margin-left:50px;">&nbsp;
				
			</td>
		</tr>
		<tr>
			<td style="margin-left:50px;">
				<span class="head"> User Sign Up </span>
			</td>
		</tr>
		<tr>
			<td style="margin-left:50px;">&nbsp;
				
			</td>
		</tr>
		<tr>
			<td style="margin-left:50px;">
				<input type="email" name="t1" placeholder=" Enter Your Email Id" class="txt" required><br><br>
			</td>
		</tr>
		<tr>
			<td style="margin-left:50px;">
				<input type="password" name="t2" placeholder=" Enter Your Password" class="txt" maxlength="12" required>
			</td>
		</tr>
		<tr>
			<td style="margin-left:50px;">
<br>            <select name="t3" class="txt" required style="color:gray;">
	<option>Choose Area</option>
	<option>Aliganj</option>
	<option>Indira Nagar</option>
	<option>Janki Puram</option>
	<option>Kalyanpur</option>
	<option>Khurram Nagar</option>
	<option>Vikas Nagar</option>
            </select>
			</td>
		</tr>
		<tr>
			<td style="margin-left:50px;">&nbsp;
				
			</td>
		</tr>
		<tr>
			<td style="margin-left:50px;">
				<input type="submit" name="submit" value="SUBMIT" class="btn">
				<input type="reset" name="reset" value="CLEAR" class="btn">
			</td>
		</tr>
		<tr>
			<td style="margin-left:50px;">&nbsp;
				
			</td>
		</tr>
		<tr>
			<td style="margin-left:50px;">&nbsp;
				
			</td>
		</tr>
		<tr>
			<td style="margin-left:50px;">
<span style="color:red;"> Already registered ? </span><a href="login.php" style="color:#0066FF;"> sign in here </a>
			</td>
		</tr>
		<tr>
			<td style="margin-left:50px;">&nbsp;
				
			</td>
		</tr>
	           </table>
	           </form>

                        </div>

</center>
<span style="position:fixed;text-align:center;bottom:0px;right:0px;width:60px;height:40px;color:white;background-color:brown;border:1px solid brown;border-radius:10px 10px 0px 0px;">
	<br><a href="index.php" style="color:white;font-size:14px;text-decoration:none;"> HOME </a>
</span>

</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		session_start();
				
		$email = $_POST['t1'];
		$pass = $_POST['t2'];
		$area = $_POST['t3'];
		
		include("config.php");
		$q = "INSERT INTO users (email,pass,area) VALUES ('$email','$pass','$area')";
		$r = mysqli_query($con,$q);
		if($r > 0)
		{
			echo "<script>alert('User Registration Successful');</script>";
		}
		else
		{
			echo "<script>alert('Error: Could not be register');</script>";
		}
	}
?>