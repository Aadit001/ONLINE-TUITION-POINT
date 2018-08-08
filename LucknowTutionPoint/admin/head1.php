<?php

 session_start();
 $u = $_SESSION['adminSession'];
 if(!isset($u))
 {
 	header("location: ../index.php");
 }

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title> :: ABC Tution Point :: </title>
    <link rel="stylesheet" type="text/css" href="../css/myCss.css" />
    <link rel="stylesheet" type="text/css" href="../engine1/style.css" />
	<script type="text/javascript" src="../engine1/jquery.js"></script>