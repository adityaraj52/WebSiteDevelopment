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
	
	if( !strcmp($row['Email'],$x))
	{	
		{
			$e1=$row['First'];
			$e2=$row['Last'];
			$e3=$row['Email'];
			$e4=$row['Birthday'];
			$e5=$row['Model'];
			$e6=$row['Gender'];
			$e7=$row['Country'];
			$e8=$row['Mobile'];
		}
	}	
}
?>

<div id="none" style= "background-color:#D8D8D8;HEIGHT:70PX;width:1340px;margin-left:0px;">

<h4>Buy Online or Call 1-800-425-4026 or 080-2506-8026
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Welcome : &nbsp;&nbsp;&nbsp;&nbsp;

<?php echo $_SESSION['username']; ?>

<div id="none" style= "background-color:#0080FF;HEIGHT:50PX;width:1340px;margin-left:0px;margin-top:10px">
<div style="margin-top:0px;float:left"><font size="5px">

<a href="main.htm" style="text-decoration: none ;color:#ffffff;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

Home</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<a href="ProfileView2.php" style="text-decoration: none ;color:#ffffff;">View Own</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<a href="ProfileViewadmin.php" style="text-decoration: none ;color:#ffffff;">View Others</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<a href="updateadmin.php" style="text-decoration:none;color:#ffffff">Update Own </a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="updateadmin2.php" style="text-decoration:none;color:#ffffff">Update Others</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="deleteadmin.php" style="text-decoration: none;color:#ffffff">Delete Others</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href= 'Logout.php' style="text-decoration:none;color:#FFFFFF">LogOut</a> 
&nbsp;&nbsp;&nbsp;&nbsp;

</div></div></div>

</div>
<center>
<div id="meer" style="width:720px;background-color:#0080AA;height:660px;margin-top:20px">
<form action="updateinfadmin.php" method="post">
<table border="2" width="720">
<tr style="font-size:30;height:80">
<th width="360" >Fields</th>
<th width="360" >View Info</th>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" >First Name</th>
<th width="360" ><input type="text" style="font-size:17pt" name="f1" value="<?php echo $e1;?>"</th>
</tr>



<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="35">Last Name</th>
<th width="360" height="35"><input type="text" style="font-size:17pt" name="f2" value="<?php echo $e2;?>"</th>

</tr>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="20">Email</th>
<th width="360" height="20">
<div width="50px" height="60">
<div width="30px" height="60" style="background-color:#ffffff;margin-left:1.3cm;margin-right:1.3cm">

<font style="background-color:#ffffff;size:17pt;color:#000000"><?php echo $e3;?></font></th>
</div>
</tr>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="20">Birthday</th>
<th width="360" height="20"><input type="text" style="font-size:17pt" name="f4" value="<?php echo $e4;?>"</th>
</tr>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="20">Model Intersted</th>

<th width="360" height="20">
<select name="f5" style="width:260px;font-size:17pt">
  <option value="Iphone 5s">Iphone 5s</option>
  <option value="Samsung Galaxy S4">Samsung Galaxy S4</option>
  <option value="Nexus Plus PRO">Nexus Plus PRO</option>
  <option value="Apple Inspira">Apple Inspira</option>
  <option value="Iphone HTC Intuition">Iphone HTC Intuition</option>
  <option value="Sony Xperia Gmma">Sony Xperia Gmma</option>
  <option value="Google">Google</option>
</select>
</th>
</tr>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="20">Gender</th>
<th width="360" height="20">

<select name="f6" style="width:260px;font-size:17pt">
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
</th>
</tr>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="20">Country</th>
<th width="360" height="20">

<select name="f7" value="<?php echo $e7;?>" style="width:260px;font-size:17pt">
  <option value="India">India</option>
  <option value="Saudi Arabia">SaudiArabia</option>
  <option value="NewYork">Newyork</option>
  <option value="Australia">Australia</option>
  <option value="Indonesia">Indonesia</option>
  <option value="Switzerland">Switzerland</option>
  <option value="Geneva">Geneva</option>
  <option value="None">None Of These</option>
</select>
</tr>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="20">Contact</th>
<th width="360" height="20"><input type="text" style="font-size:17pt" maxlength="10" name="f8" value="<?php echo $e8;?>"</th>
</tr>
</table>

<table border="3">
<tr style="font-size:25;color:#ffffff;height:60">
<th width="720" height="20"><input type="submit" style="font-size:17pt" value="Submit"</th>
</tr>
</table>