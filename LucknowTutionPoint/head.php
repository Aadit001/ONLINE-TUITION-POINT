<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title> :: ABC Tution Point :: </title>
    <link rel="stylesheet" type="text/css" href="css/myCss.css" />
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
</head>
<body>

    <center>

    <div>
        <table style="width:990px;height:40px;">
        <tr>
            <td style="width:720px;text-align:left;">
                <img src="images/logo.png" title="ABC Tution Point" />
            </td>

            <td style="width:250px;text-align:right;">
                <a href="login.php" class="head4"> Sign In </a>
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
                <a href="index.php" class="style1"> Home </a>
            </td>
            <td style="width:130px;" class="nav">
                <a href="about.php" class="style1"> About Us </a>
            </td>
            <td style="width:160px;" class="nav">
                <a href="registration.php" class="style1"> Registration </a>
            </td>
            <td style="width:125px;" class="nav">
                <a href="contact.php" class="style1"> Contact Us </a>
            </td>
            <td style="width:20px;">&nbsp;</td>
        </tr>
        </table>
    </div>

    <div class="content">
    
            <table width="990"  border="0px" align="center" cellpadding="0" cellspacing="0">
            <tr>

                <td width="16"><img src="images/top_lef.gif" width="16" height="16"></td>
                <td width="950" height="16" background="images/top_mid.gif"><img src="images/top_mid.gif" width="16" height="16"></td>
                <td width="24"><img src="images/top_rig.gif" width="24" height="16"></td>
            </tr>

            <tr>
                <td width="16" background="images/cen_lef.gif"><img src="images/cen_lef.gif" width="16" height="11"></td>
                <td bgcolor="#FFFFFF" width="950px" bordercolordark="#970000">
                    <table width="950px" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td width="950px">
                               
                               <div style="width:950px;height:250px;">
                               
                                   <div style="width:650px;height:250px;float:left;">
                                   
                                        	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	                                            <div id="wowslider-container1">
	                                            <div class="ws_images"><ul>
                                            <li><img src="data1/images/1.jpg" alt="1" title="1" id="wows1_0"/></li>
                                            <li><img src="data1/images/2.jpg" alt="2" title="2" id="wows1_1"/></li>
                                            <li><img src="data1/images/3.jpg" alt="3" title="3" id="wows1_2"/></li>
                                            </ul></div>
                                            <div class="ws_bullets"><div>
                                            <a href="#" title="1"><img src="data1/tooltips/1.jpg" alt="1"/>1</a>
                                            <a href="#" title="2"><img src="data1/tooltips/2.jpg" alt="2"/>2</a>
                                            <a href="#" title="3"><img src="data1/tooltips/3.jpg" alt="3"/>3</a>
                                            </div></div><span class="wsl"><a href="http://wowslider.com/vf">full screen slider</a> by WOWSlider.com v6.1</span>
	                                            <div class="ws_shadow"></div>
	                                            </div>	
	                                            <script type="text/javascript" src="engine1/wowslider.js"></script>
	                                            <script type="text/javascript" src="engine1/script.js"></script>
	                                            <!-- End WOWSlider.com BODY section -->

                                   </div>

                                   <div style="width:280px;margin-left:15px;height:250px;float:right;background-color:#F0F0F0;border:1px solid #F0F0F0; border-radius:20px 20px 20px 20px ;">
                                   
                                   <span class="head2"> &nbsp;&nbsp;&nbsp;News & Events </span>
                                   <hr>

                                        <marquee style="height:160px;" scrollamount="2" direction="up" onMouseOver="this.stop()" onMouseOut="this.start()">
		                <?php	
				include("config.php");
			
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