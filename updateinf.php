<?php
$a=" ";
if (isset($_COOKIE["username"]))
{
	$a=$_COOKIE['username'];
}

$con=mysql_connect("localhost","root","");

$f1=$_POST['f1'];

$f2=$_POST['f2'];
$f4=$_POST['f4'];
$f5=$_POST['f5'];
$f6=$_POST['f6'];
$f7=$_POST['f7'];
$f8=$_POST['f8'];
$f9=$_POST['f9'];
$f10=$_POST['f10'];
if(!$con)
{ die("error".mysql_error());
}

mysql_select_db("records");
$in=mysql_query("UPDATE persons SET 
FNAME='$f1',
LNAME='$f2',
BDAY='$f4',
MODEL='$f5',
GENDER='$f6',
LOCATION='$f7',
MOBILE='$f8'
WHERE EMAIL='$a' ");

mysql_select_db("records");
$q2=mysql_query("INSERT INTO cart VALUES('$f9','$a','$f10')",$con);

if(!$q2)
echo "<font color=red size=6px>Item Already Added in CART Value Updated</font>";

$QUE="UPDATE cart SET PRO_QUANTITY='$f10' WHERE PRODUCT_ID='$f9' AND USER_ID='$a'";
$q2=mysql_query($QUE,$con);

if(!$q2)
echo "<font color=red size=6px>NOT Added in CART</font>";

$q2="DELETE FROM cart WHERE PRO_QUANTITY=0";
$query=mysql_query($q2,$con);
if(!$query)
echo "Failed to delete";

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
<div id="meer" style="width:720px;background-color:#0080AA;height:660px;margin-top:20px">
<?PHP
echo "<h2>Your account updated Successfully ";
?>
</DIV>