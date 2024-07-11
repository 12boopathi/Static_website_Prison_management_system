<?php
include("dbconnect.php");
extract($_POST);
session_start();

if (isset($_POST['btn'])) {

  $max_qry = mysqli_query($connect, "select max(pid) from prisoner_registeration");
  $max_row = mysqli_fetch_array($max_qry);
  $id = $max_row['max(pid)'] + 1;
  //echo $name.$prisonum.$gender.$address.$email.$pnumber.$uname.$password;
  $qry = mysqli_query($connect, "insert into prisoner_registeration values('$id','$name','$prisonum','$gender','$address','$email','$pnumber','','')");
  if ($qry) {
    echo "<script>alert('Record created Successfull')</script>";
  } else {
    echo "<script>alert('Failed')</script>";
  }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>PRISON MANAGEMENT SYSTEM</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link href="style.css" rel="stylesheet" type="text/css" />
  <style type="text/css">
    <!--
    .style1 {
      color: #000000
    }
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
        <span>Whannels Road, Egmore, Chennai-600 008.</span>
      </div>
    </div>
    <div id="sidenotes">
      <div class="sidenav">
        <ul>
          <li><a class="active" href="adminhome.php">Add Prisoner</a></li>

          <li><a href="index.php">Logout</a></li>
        </ul>
      </div>

    </div>
    <div id="contents">
      <h2 align="center">Prisoner Registration</h2>
      <form action="" method="post">
        <table width="100%" border="0" align="center">
          <tr>
            <td colspan="2" rowspan="12" align="right"><img src="img/prisoner.jpg" width="300" height="300"></td>
            <td colspan="2">
              <div align="center" class="style1"> </div>
            </td>
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
            <td height="33"><span class="style7"> Name </span></td>
            <td><label>
                <input name="name" type="text" id="name" required />
              </label></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="33"><span class="style7"> Prisoner Number </span></td>
            <td><label>
                <input name="prisonum" type="text" id="prisonum" required />
              </label></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="30"><span class="style7">Gender</span></td>
            <td><label>
                <span class="style8">
                  <input name="gender" type="radio" value="Male" />
                  Male
                  <input name="gender" type="radio" value="Female" />
                  Female</span></label></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="48"><span class="style7">Address</span></td>
            <td><label>
                <textarea name="address" id="address" required></textarea>
              </label></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="33"><span class="style7"> age </span></td>
            <td><label>
                <input name="prisonum" type="text" id="prisonum" required />
              </label></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="40"><span class="style7"> crime category </span></td>
            <td><label>
                <input name="email" type="email" id="emil" required />
              </label></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>

          <tr>
            <td height="44"><span class="style7">block </span></td>
            <td><label>
                <input name="pnumber" type="text" required minlength="10" maxlength="10" size="10">
              </label></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <!-- <tr>
            <td height="38"><span class="style7">User Name </span></td>
            <td><label>
              <input name="uname" type="text" id="uname" required/>
            </label></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="36"><span class="style7">Password</span></td>
            <td><label>
              <input name="password" type="password" id="password" required/>
            </label></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>-->

          <td height="33">&nbsp;</td>
          <td><input name="btn" type="submit" id="btn" value="Register">
            <input type="reset" name="Reset" value="Reset">
          </td>
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