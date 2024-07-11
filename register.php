<?php

include("dbconnect.php");
extract($_POST);
session_start();

if(isset($_POST['btn']))
{

$qry1=mysqli_query($connect,"select * from user_reg where uname='$uname'");
$count=mysqli_num_rows($qry1);
if($count>0){                                                                                           
echo "<script>alert('username already taken')</script>";
}else{
$qry=mysqli_query($connect,"insert into user_reg values('','$name','$pnumber','$address','$city','$email','$uname','$password')");
if($qry)
{
echo "<script>alert('Registered Successfull')</script>";
header("location:user.php");

}

}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PRISON MANAGEMENT SYSTEM</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrap">
  <div id="tophead"></div>
  <div id="header">
    <div id="logo">
      <h1 class="logotext">PRISON <span> MANAGEMENT </span>SYSTEM</h1>
    </div>
    <div id="navigation">
      <ul>
        <li><a class="current" href="user.php">User</a></li>
        <li><a  href="admin.php">Admin</a></li>
        <li><a  href="index.php">Home</a></li>
      </ul>
    </div>
    <div id="infobox">
      <h1>Director General of Police/ Director General of Prisons and Correctional Services</h1>
      <span>Whannels Road, Egmore, Chennai-600 008.</span> </div>
  </div>
  <div id="sidenotes">
    
  </div>
  <div id="contents">
    <h2 align="center">User Register</h2>
   <form id="form1" name="form1" method="post" action="">
      <table width="100%" border="0">
        <tr>
          <td width="44%" rowspan="13" valign="top"><div align="right"><img src="img/user.png" width="321" height="321" /></div></td>
          <td height="42" colspan="4" ><div align="center"><span class="style3"></span></div></td>
          <td width="9%">&nbsp;</td>
          <td width="8%"><div align="right"></div></td>
        </tr>
        <tr>
          <td width="4%">&nbsp;</td>
          <td width="12%" height="29">&nbsp;</td>
          <td width="17%">&nbsp;</td>
          <td width="6%">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="31">&nbsp;</td>
          <td><strong>Name</strong></td>
          <td><input type="text" name="name" required/></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="50">&nbsp;</td>
          <td><strong>Contact Number</strong></td>
          <td><input name="pnumber" type="text" id="pnumber" required/></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="49">&nbsp;</td>
          <td><strong>Address</strong></td>
          <td><textarea name="address" id="address" required></textarea></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="35">&nbsp;</td>
          <td><strong>City</strong></td>
          <td><input type="text" name="city" required/></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="32">&nbsp;</td>
          <td><strong>E_Mail</strong></td>
          <td><input type="text" name="email" required/></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="35">&nbsp;</td>
          <td><strong>User Name </strong></td>
          <td><input type="text" name="uname" required/></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="46">&nbsp;</td>
          <td><strong>Password</strong></td>
          <td><input name="password" type="password" id="password" required/></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="16">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="38">&nbsp;</td>
          <td colspan="2">
            <div align="right">
              <input type="submit" name="btn" value="Register"/>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <input name="btn1" type="submit" id="btn1" value="Reset" />
                </div></td><td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form>
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
