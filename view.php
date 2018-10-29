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
else
echo "Connection Successful";
$qry="select * from post";
if($con->query($qry)===TRUE)
$res=$con->query($qry);
echo "<table border=1><th>Plan Name</th><th>Monthly Rental</th><th>Free Calls</th><th>Free SMSs</th><th>Free Internet</th><th>Call Charges</th><th>SMS Charges</th><th>Data Charges</th><th>Roaming Charges</th>";
while($row=$res->fetch_assoc())
{
echo "<tr><td>".$row["PN"]."</td><td>".$row["MR"]."</td><td>".$row["FC"]."</td><td>".$row["FS"]."</td><td>".$row["FI"]."</td><td>".$row["CC"]."</td><td>".$row["SC"]."</td><td>".$row["DC"]."</td><td>".$row["RC"]."</td></tr>";
}
echo "</table>";
$con->close();
?>
