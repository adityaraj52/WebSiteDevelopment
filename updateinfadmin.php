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

if(!$con)
{ die("error".mysql_error());
}

mysql_select_db("records");
$in=mysql_query("UPDATE persons SET 
First='$f1',
Last='$f2',
Birthday='$f4',
Model='$f5',
Gender='$f6',
Country='$f7',
Mobile='$f8'
WHERE Email='$a' ");
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
<?PHP
echo "<h2>Your account updated Successfully ";
?>
</DIV>