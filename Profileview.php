<html>
<head>
<link type="text/css" rel="stylesheet" href="indiastyle.css">

<?php
session_start();
$x=$_SESSION['username'];

?>
<?php

$con= mysql_connect("localhost","root","");
mysql_select_db("records",$con);
$result = mysql_query("SELECT * FROM persons",$con);
while($row = mysql_fetch_array($result))
{
	
	if( !strcmp($row['EMAIL'],$x))
	{	
		{
			$e1=$row['FNAME'];
			$e2=$row['LNAME'];
			$e3=$row['EMAIL'];
			$e4=$row['BDAY'];
			$e5=$row['MODEL'];
			$e6=$row['GENDER'];
			$e7=$row['LOCATION'];
			$e8=$row['MOBILE'];
		}
	}	
}
?>

<div id="none" style= "background-color:#D8D8D8;HEIGHT:80PX;width:1340px;margin-left:0px;">

<h4>Buy Online or Call 1-800-425-4026 or 080-2506-8026
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Welcome : &nbsp;&nbsp;&nbsp;&nbsp;
<font size="5px">
<?php 
echo $_COOKIE['username'];
?>
</font>
<div id="none" style= "background-color:#0080FF;HEIGHT:50PX;width:1340px;margin-left:0px;margin-top:20px">
<div id="none" style= "background-color:#0080FF;HEIGHT:50PX;width:940px;margin-left:280px;">
<div style="margin-top:12px;float:left"><font size="5px">

<a href="main.php" style="text-decoration: none ;color:#ffffff;">Home</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<a href="ProfileView.php" style="text-decoration: none ;color:#ffffff;">View Info</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="update.php" style="text-decoration:none;color:#ffffff">Update </a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="deleteme.php" style="text-decoration: none;color:#ffffff">Delete Acc.</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href= 'Logout.php' style="text-decoration:none;color:#FFFFFF">LogOut</a> 
&nbsp;&nbsp;&nbsp;&nbsp;

<a href= 'add2cart.php' style="text-decoration:none;color:#FFFFFF">MyCart</a> 
&nbsp;&nbsp;&nbsp;&nbsp;

</div></div></div>

</div>
<center>
<div id="meer" style="width:720px;background-color:#0080AA;height:600px;margin-top:20px">

<table border="2" width="720">
<tr style="font-size:30;height:80">
<th width="360" >Fields</th>
<th width="360" >View Info</th>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" >First Name</th>
<th width="360" ><?php echo $e1;?></th>
</tr>



<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="35">Last Name</th>
<th width="360" height="35"><?php echo $e2;?></th>
</tr>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="20">Email</th>
<th width="360" height="20"><?php echo $e3;?></th>
</tr>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="20">Birthday</th>
<th width="360" height="20"><?php echo $e4;?></th>
</tr>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="20">Model Intersted</th>
<th width="360" height="20"><?php echo $e5;?></th>
</tr>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="20">Gender</th>
<th width="360" height="20"><?php echo $e6;?></th>
</tr>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="20">Country</th>
<th width="360" height="20"><?php echo $e7;?></th>
</tr>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="20">Contact</th>
<th width="360" height="20"><?php echo $e8;?></th>
</tr>
