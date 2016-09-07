<?php
$con= mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
$g1=$_POST['a1'];
$g2=$_POST['a2'];
$g3=$_POST['a3'];
$g4=$_POST['a4'];
$g5=$_POST['a5'];
$g6=$_POST['gender'];
$g7=$_POST['a7'];
$g8=$_POST['a8'];

mysql_select_db("records", $con);
$result = mysql_query("SELECT * FROM persons",$con);
$flag=0;
while($row = mysql_fetch_array($result))
{	
	if(!strcmp($row['EMAIL'],$g3))
	{	
			$flag=1;
	}
}
if($flag==0)
{
mysql_select_db("records", $con);
$sql="INSERT INTO persons VALUES
('$_POST[a1]','$_POST[a2]','$_POST[a3]','$_POST[a4]','$_POST[a5]','$_POST[a6]','$_POST[gender]','$_POST[a7]','$_POST[a8]')";
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
echo "<h1>Record Added Successfully</h1>";
}
else
{
echo "<h1>User Exists</h1>";
}
echo "<a href='Main.php'><h2>Click Here to go to Home</h2></a>";
mysql_close($con);
?>