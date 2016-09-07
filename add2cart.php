<html>
<head>

<link type="text/css" rel="stylesheet" href="indiastyle.css">
<script>
function validateForm()
{
var x=document.forms["myForm"]["fname"].value;
if (x==null || x=="")
  {
  alert("First name must be filled out");
  return false;
  }
}
</script>
<?php
$e1=array();
$e2=array();
$e3=array();
$e4=array();
session_start();
$x=$_SESSION['username'];
$i=0;
$j=0;
$con= mysql_connect("localhost","root","");
mysql_select_db("records",$con);
$result = mysql_query("SELECT * FROM cart",$con);

while($row = mysql_fetch_array($result))
{
	
	if( !strcmp($row['USER_ID'],$x))
	{	
		{
			$e1[$i]=$row['PRO_QUANTITY'];
			$e2[$i]=$row['PRODUCT_ID'];
			$i++;	
			
		}
	}	
}

$query="SELECT AMOUNT, BRAND, PRODUCT_ID FROM cart AS c LEFT JOIN product AS p ON c.PRODUCT_ID = p.ID";
$res=mysql_query($query,$con);

if($i)
{
$i=0;
while($row = mysql_fetch_array($res))
{	
	if($i<count($e1))
	if(!strcmp($e2[$i],$row['PRODUCT_ID']))
	{
		$e3[$i]=$row['AMOUNT'];
		$e4[$i]=$row['BRAND'];	
		$i++;
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
<center>
<div  style="width:1400px;background-color:#0080AA;height:500px;margin-top:20px">
<div  style="width:1400px;background-color:#ffffff;height:500px;margin-top:10px">
<br><br><br><br>
<table border="2" width="600">
<tr style="font-size:30;">
<th width="360" height=80>S_NO.</th>
<th width="360">PRODUCT_ID</th>
<th width="360">PRO_QUANTITY<br></th>
<th width="360">Unit_Price</th>
<th width="360">Total_Price</th>
<th width="360">BRAND<br></th>
</tr>

<?php
if($i)
for($i=0;$i<count($e1);$i++)
{
$p=$i+1;
echo "<tr><th>"."<font  size='6px'>".$p."</font>"."</th>";
echo "<th>"."<font  size='6px'>".$e2[$i]."</font>"."</th>";
echo "<th>"."<font  size='6px'>".$e1[$i]."</font>"."</th>";
echo "<th>"."<font  size='6px'>".$e3[$i]."</font>"."</th>";
echo "<th>"."<font  size='6px'>".$e3[$i]*$e1[$i]."</font>"."</th>";
echo "<th>"."<font  size='6px'>".$e4[$i]."</font>"."</th></tr>";
}
?>
</table>

<form name="formes" action="viewcart.php" onsubmit="return validateForm();" method="get">
<font size=5px><br>Enter ProductID to view </font><input type="text" name="proid" value=1 size="12">
<br><br><center><input type="submit" Value="Submit" style="width:150px;height:30px"></center>
</form>
