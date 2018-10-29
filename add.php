<?php
$server="localhost";
$username="root";
$pass="";
$dbname="tadigi";
$con=new mysqli($server,$username,$pass,$dbname);
if($con->connect_error)
{
	die("Connection failed");
}
$PN=$_GET('pn');
$FC=$_GET('fc');
$FS=$_GET('fs');
$FI=$_GET('fi');
$CC=$_GET('cc');
$SC=$_GET('sc');
$DC=$_GET('dc');
$RC=$_GET('rc');
$MR=$_GET('mr');
$qry="insert into post values('$PN','$FC','$FS','$FI','$CC','$SC','$DC','$RC','$MR');";
if($con->query($qry)===TRUE)
include "suc.html";
else
include("add.html");
$con->close();
?>
