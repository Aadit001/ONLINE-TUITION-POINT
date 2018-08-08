<?php include("head.php") ?>

<center>

<table width="100%">

            <tr>
                <td width="100%" height="400px" valign="top" align="center">
                    <?php
                       
                            $enroll =$u;

	           include("../config.php");
                            $q="select * from tutor where tid='$u'";
	                    $r = mysqli_query($con,$q);
	                    $c = mysqli_num_rows($r);
                             if ($c>0) {
                             if($row = mysqli_fetch_array($r))
                             {

$pic = "../".$row['pic'];
                             echo "<table style='background-color: #d7d7d7' width='60%'>";
                             echo "<tr>";
                            echo "<td colspan='2' align='center'>";
                                echo "<h2>Profile</h2>";
                            echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td valign='top'>";
                                echo "UserName :".$u;
                            echo "</td>";
                            echo "<td rowspan='3' align='right' valign='top'>";
                                 echo "<img src='".$pic."' hspace='0px' vspace='0px' width='129' height='130' style='margin-left: 10px;margin-bottom: 5px;float: left; border:thin;background-color:#FF0000'/>";
                            echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td valign='top'>";
                                echo "Name :".$row['name'];
                            echo "</td>";
                        echo "</tr>";
                         echo "<tr>";
                            echo "<td valign='top'>";
                               echo "Password :".$row['pass'];
                            echo "</td>";
                        echo "</tr>";
                         echo "<tr>";
                            echo "<td valign='top'>";
                                 echo "<br>";
                               echo "Gender :".$row['gender'];
                              echo "<tr>";
                            echo "<td><br>";
                                echo "Area :".$row['area'];
                            echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td valign='top'>";
                                 echo "<br><br>";
                              echo "Address :".$row['address'];
                               echo "</td></tr>";
                            echo "<tr><td>  <br><br> Qualification :".$row['degree'];
                            echo "</td>";
                        echo "</tr>";
                                              
                    echo "</table>";
                                                        }}     
                    
                echo "</td>";
           echo "</tr>";
	?>

</table>

</center>

<?php include("foot.php") ?>