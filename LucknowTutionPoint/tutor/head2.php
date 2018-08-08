
</head>
<body>

    <center>

    <div>
        <table style="width:990px;height:40px;">
        <tr>
            <td style="width:720px;text-align:left;">
                <img src="../images/logo.png" title="ABC Tution Point" />
            </td>

            <td style="width:250px;text-align:right;">
                <span class="head4"> Welcome </span><span style="color:red;"> <?php echo $name; ?> </span>
            </td>
            <td style="width:20px;">&nbsp;</td>
        </tr>
        </table>    
    </div>

    <div>
        <table style="width:990px;height:30px;">
        <tr>
            <td style="width:430px;">&nbsp;</td>
            <td style="width:125px;" class="nav">
                <a href="tutorIndex.php" class="style1"> Home </a>
            </td>
            <td style="width:130px;" class="nav">
                <a href="profile.php" class="style1"> Profile </a>
            </td>
            <td style="width:160px;" class="nav">
                <a href="tutorStatus.php" class="style1"> View Status </a>
            </td>
            <td style="width:125px;" class="nav">
                <a href="logout.php" class="style1"> Logout </a>
            </td>
            <td style="width:20px;">&nbsp;</td>
        </tr>
        </table>
    </div>

    <div class="content">
    
            <table width="990"  border="0px" align="center" cellpadding="0" cellspacing="0">
            <tr>

                <td width="16"><img src="../images/top_lef.gif" width="16" height="16"></td>
                <td width="950" height="16" background="../images/top_mid.gif"><img src="../images/top_mid.gif" width="16" height="16"></td>
                <td width="24"><img src="../images/top_rig.gif" width="24" height="16"></td>
            </tr>

            <tr>
                <td width="16" background="../images/cen_lef.gif"><img src="../images/cen_lef.gif" width="16" height="11"></td>
                <td bgcolor="#FFFFFF" width="950px" bordercolordark="#970000">
                    <table width="950px" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td width="950px">
                               
                               <div style="width:950px;height:250px;">
                               
                                   <div style="width:650px;height:250px;float:left;">
                                        <img src="../images/banner.jpg"/>
                                   </div>

                                   <div style="width:280px;margin-left:15px;height:250px;float:right;background-color:#F0F0F0;border:1px solid #F0F0F0; border-radius:20px 20px 20px 20px ;">
                                   
                                   <span class="head2"> &nbsp;&nbsp;&nbsp;News & Events </span>
                                   <hr>

                                        <marquee style="height:160px;" scrollamount="2" direction="up" onMouseOver="this.stop()" onMouseOut="this.start()">
		                <?php	
				include("../config.php");
			
				$q = "select * from newstable";
			
				$r = mysqli_query($con,$q);
			
				$c = mysqli_num_rows($r);
			
				if($c>0)
				{
					while($row = mysqli_fetch_array($r))
					{
						echo "<label style='text-align:justify;'> * ".$row['news']."<br><hr><br></label>";			
					}
				}
				else
				{
					echo "No Data to Display";
				}
			
				?>
                                        </marquee>
                                   </div>                               
                               </div>
                            </td>
                        </tr>

                        <tr>
                            <td width="950px" height="10px">&nbsp;
                               
                            </td>
                        </tr>

                        <tr>
                            <td width="950px" height="10px">&nbsp;
                               
                            </td>
                        </tr>

                        <tr>
                            <td width="950px">
                               
                               <div style="width:950px;">
  	                             <div style="width:650px;float:left;border:1px solid gray;">