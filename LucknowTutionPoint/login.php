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
				<span class="head"> Sign In Panel </span>
			</td>
		</tr>
		<tr>
			<td style="margin-left:50px;">&nbsp;
				
			</td>
		</tr>
		<tr>
			<td style="margin-left:50px;">
				<select name="ch" class="txt" required style="color:gray;">
					<option value="0">Choose Login Type</option>
					<option value="1"> User </option>
					<option value="2"> Tutor </option>
					<option value="3"> Administrator </option>
				</select>
			</td>
		</tr>
		<tr>
			<td style="margin-left:50px;">&nbsp;
				
			</td>
		</tr>
		<tr>
			<td style="margin-left:50px;">
				<input type="text" name="t1" placeholder=" Enter Your User Id" class="txt" required><br><br>
			</td>
		</tr>
		<tr>
			<td style="margin-left:50px;">
				<input type="text" name="t2" placeholder=" Enter Your Password" class="txt" required>
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
<span style="color:red;"> New User ? </span><a href="signup.php" style="color:#0066FF;"> register here </a>
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
				
				$u = $_POST['t1'];
				$p = $_POST['t2'];
				$c = $_POST['ch'];
			
				include("config.php");
				if($c == 0)
				{
					echo "<script>alert('Error: Plz select Your login type');</script></font>";
				}
				else if($c == 1)
				{
					$q = "select * from users WHERE email='$u' and pass='$p'";
					$r = mysqli_query($con,$q);
					$c = mysqli_num_rows($r);
					if($c > 0)
					{
						if($row = mysqli_fetch_array($r))
						{
							$area = $row['area'];
						}
						$_SESSION['userSession'] = $u;
						$_SESSION['areaSession'] = $area;
						header("Location: user/userIndex.php");
					}
					else
					{
						echo "<script>alert('Error: Username OR Password not matched');</script></font>";
					}
				}
				else if($c == 2)
				{
					$q = "select * from tutor WHERE tid='$u' and pass='$p'";
					$r = mysqli_query($con,$q);
					$c = mysqli_num_rows($r);
					if($c > 0)
					{
						if($row = mysqli_fetch_array($r))
						{
							$name = $row['name'];
						}
						$_SESSION['tutorSession'] = $u;
						$_SESSION['tutorNameSession'] = $name;
						header("Location: tutor/tutorIndex.php");
					}
					else
					{
						echo "<script>alert('Error: Username OR Password not matched');</script></font>";
					}
				}
				else
				{
					$q = "select * from admin WHERE uname='$u' and pass='$p'";
					$r = mysqli_query($con,$q);
					$c = mysqli_num_rows($r);
					if($c > 0)
					{
						$_SESSION['adminSession'] = $u;
						header("Location: admin/adminIndex.php");
					}
					else
					{
						echo "<script>alert('Error: Username OR Password not matched');</script></font>";
					}	
				}
			}

?>