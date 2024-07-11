<?php

$servername="localhost";
$username = "root";
$password = "";
$mydb ="prison";

$connect = mysqli_connect($servername,$username,$password,$mydb);
if(!$connect){
die("cant reach database" .mysqli_connect_error());
}

 
?>