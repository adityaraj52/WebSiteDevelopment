<head>
<body background="launch.jpg">
<div id="none" style= "background-color:#D8D8D8;HEIGHT:105PX;width:1340px;margin-left:0px;padding-top:0.1px">

<h3 style="margin-left:0px">Buy Online or Call 1-800-425-4026 or 080-2506-8026
<a href="Registration.php" style="text-decoration:none;color:#000000;">
<?php 
if (isset ($_COOKIE["username"]))
$flag=1;
else 
$flag=0;
?>
<a href="Profileview.php" style="text-decoration:none;color:#000000;margin-left:50px">
<?php
if($flag)
echo "<font size=5px > Welcome"."&nbsp;&nbsp;".$_COOKIE["username"];
?>
</a>
<font size="5px">
<a href="Registration.php" style="text-decoration:none;margin-left:50px">
<?php

if($flag==0)
echo "Guest Login";

?>
</a>
</font>
</font>

<font size=4.5px color=#000000 style="float:right"><b>We Design for You</b><br></font>

<div id="none" style= "background-color:#0080FF;HEIGHT:55PX;width:1340px;margin-left:0px;margin-top:5px;float:left">
<div id="none" style= "background-color:#0080FF;HEIGHT:50PX;width:940px;margin-left:400px;margin-top:5px;">
<div style="margin-top:14px;float:left">
<font size="5px"><a href="Main.php" style="text-decoration: none ;color:#ffffff;">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="Aboutus.php" style="text-decoration:none;color:#ffffff">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="gallery.php" style="text-decoration: none;color:#ffffff">Gallery</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="contactus.php" style="text-decoration: none;color:#ffffff">Contact Us</a>
</div></div></div>

</div>
<?php
session_start();
$x=$_GET['proid'];

?>
<?php

$con= mysql_connect("localhost","root","");
mysql_select_db("records",$con);
$result = mysql_query("SELECT * FROM product",$con);
while($row = mysql_fetch_array($result))
{	
	if( !strcmp($row['ID'],$x))
	{	
		{
			$e1=$row['ID'];
			$e2=$row['M_NO'];
			$e3=$row['QUANTITY'];
			$e4=$row['NAME'];
			$e5=$row['AMOUNT'];
			$e6=$row['IMAGE'];
			$e7=$row['DESCRIPTION'];
			$e8=$row['BRAND'];
		}
	}	
}
$result = mysql_query("SELECT * FROM product_color",$con);
while($row = mysql_fetch_array($result))
{	
	if( !strcmp($row['PRO_ID'],$x))
	{	
		{
			$e9=$row['PRO_COLOR'];
		}
	}	
}
?>
<center>
<div id="meer" style="width:720px;background-color:#0080AA;height:650px;margin-top:20px">

<table border="2" width="720">
<tr style="font-size:30;height:80">
<th width="360" >Fields</th>
<th width="360" >View Info</th>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" >ID</th>
<th width="360" ><?php echo $e1;?></th>
</tr>



<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="35">M_NO</th>
<th width="360" height="35"><?php echo $e2;?></th>
</tr>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="20">QUANTITY</th>
<th width="360" height="20"><?php echo $e3;?></th>
</tr>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="20">NAME</th>
<th width="360" height="20"><?php echo $e4;?></th>
</tr>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="20">AMOUNT</th>
<th width="360" height="20"><?php echo $e5;?></th>
</tr>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="20">IMAGE</th>
<th width="360" height="20"><?php echo $e6;?></th>
</tr>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="20">DESCRIPTION</th>
<th width="360" height="20"><?php echo $e7;?></th>
</tr>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="20">BRAND</th>
<th width="360" height="20"><?php echo $e8;?></th>
</tr>

<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="20">COLOR</th>
<th width="360" height="20"><?php echo $e9;?></th>
</tr>
</TABLE>
