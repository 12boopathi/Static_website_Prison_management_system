<?php
include("dbconnect.php");
extract($_POST);
session_start();
echo $uname=$_SESSION['uname'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PRISON MANAGEMENT SYSTEM</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #000000}
-->
</style>
</head>
<body>
<div id="wrap">
  <div id="tophead"></div>
  <div id="header">
    <div id="logo">
      <h1 class="logotext">PRISON <span> MANAGEMENT </span>SYSTEM</h1>
    </div>
   
    <div id="infobox">
      <h1>Director General of Police/ Director General of Prisons and Correctional Services</h1>
      <span>Whannels Road, Egmore, Chennai-600 008.</span> </div>
  </div>
  <div id="sidenotes">
    <div class="sidenav">
      <ul>
        <li><a  class="active" href="userhome.php">Apply Parole</a></li>
        <li ><a href="applypass.php">Apply Visitors Pass</a></li>
		<li ><a  href="view status.php">Status</a></li>
		<li><a href="index.php">Logout</a></li>
      </ul>
    </div>
	
  </div>
  <div id="contents">
   
    <div class="blogbottom"> 
      <hr />
    </div>
   
  </div>
 
<div id="bottompage">
  <div id="inner"><span><a href="#">Back to Top</a></span>
    <!-- -->
   
    <!--  -->
  </div>
</div>
</body>
</html>
