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
$PN=$_POST['pn'];
$FC=$_POST['fc'];
$FS=$_POST['fs'];
$FI=$_POST['fi'];
$CC=$_POST['cc'];
$SC=$_POST['sc'];
$DC=$_POST['dc'];
$RC=$_POST['rc'];
$MR=$_POST['mr'];
$qry="insert into post values('$PN','$FC','$FS','$FI','$CC','$SC','$DC','$RC','$MR');";
if($con->query($qry)===TRUE)
include "suc.html";
else
include("add.html");
$con->close();
?>
