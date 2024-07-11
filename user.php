<?php
include("dbconnect.php");
extract($_POST);
session_start();
if(isset($_POST['btn']))
{
$qry=mysqli_query($connect,"select * from user_reg where uname='$uname' && password='$password'");
$num=mysqli_num_rows($qry);
if($num==1)
{
$_SESSION['uname']=$uname;
echo "<script>alert('Login Successfull')</script>";
header("location:userhome.php");
}
else
{
echo "<script>alert('Login UnSuccessfull')</script>";
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
    <h2 align="center">User Login</h2>
   <form action="" method="post">
				    <table width="100%" border="0" align="center">
                      <tr>
                        <td colspan="2" rowspan="8" align="right"><img src="img/user.png" width="300" height="300"></td>
                        <td colspan="2"><div align="center" class="style1"> </div></td>
                        <td width="16%">&nbsp;</td>
                        <td width="1%">&nbsp;</td>
                      </tr>
                      <tr>
                        <td width="14%">&nbsp;</td>
                        <td width="18%">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="37"><span class="style4">User Name </span></td>
                        <td><input name="uname" type="text" id="uname"></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="28"><span class="style4">Password</span></td>
                        <td><input name="password" type="password" id="password"></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="33">&nbsp;</td>
                        <td><input name="btn" type="submit" id="btn" value="Login">
                        <input type="reset" name="Reset" value="Reset"></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><a href="#">Forgot password</a></td>
                        <td>&nbsp;</td>
                        <td><a href="register.php">Create new account</a></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
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
