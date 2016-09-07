<html>
<head>
<link type="text/css" rel="stylesheet" href="indiastyle.css">

</head>
<body bgcolor="#ffffff">
<div id="none" style= "background-color:#D8D8D8;HEIGHT:100PX;width:1340px;margin-left:0px;">

<h3>Buy Online or Call 1-800-425-4026 or 080-2506-8026
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php 
session_start();
$m=$_POST['fname1'];
$n=$_POST['fname2'];
$flag=-1;

$con= mysql_connect("localhost","root","");
mysql_select_db("records",$con);
$result = mysql_query("SELECT * FROM persons",$con);
while($row = mysql_fetch_array($result))
{
	
	if( !strcmp($row['EMAIL'],$m))
	{	if( !strcmp($row['PASSWORD'],$n))
		{
			$flag=1;
			setcookie("username",$row['EMAIL'],time()+3600*24,'/');
			$_SESSION["username"]=$row['EMAIL'];
			echo "Welcome"."&nbsp;&nbsp;".$row['EMAIL'];
			break;
		}
		else
		{
			
			 unset($_COOKIE['username']);
 			 setcookie('username', null, -1, '/');
		}
	}
	
}
mysql_close($con);


?>

<a href= 'Registration.php' style="text-decoration:none;color:#FF0040">

<?php
if($flag==-1)
echo "Sign In Again ";

?>
</a>


</h4>


<div id="none" style= "background-color:#0080FF;HEIGHT:50PX;width:940px;margin-left:0px;"><div id="none" style= "background-color:#0080FF;HEIGHT:50PX;width:940px;margin-left:400px;"><div style="margin-top:12px;float:left"><font size="5px"><a href="Main.php" style="text-decoration: none ;color:#ffffff;">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Aboutus.htm" style="text-decoration:none;color:#ffffff">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="gallery.php" style="text-decoration: none;color:#ffffff">Gallery</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contactus.htm" style="text-decoration: none;color:#ffffff">Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href= 'Logout.php' style="text-decoration:none;color:#FFFFFF">
<?php
if($flag==1 || $flag==2)

echo "LogOut";
?>
</a>

<a href='Profileview.php' style="text-decoration:none;color:#FFFFFF">
<?php
if($flag==1)
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Accounts";
?>
</a>


<a href='Profileview2.php' style="text-decoration:none;color:#FFFFFF">
<?php
if($flag==2)
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Accounts";
?>
</a>

</div></div></div>

</div>



<script>

function validateform()
{
var x=document.forms["form1"]["a"].value;
if (x==null || x=="")
  {
  alert("Enter Password");
  return false;
  }
else
return true;
}

function validateform()
{
var x=document.forms["form1"]["a"].value;
if (x==null || x=="")
  {
  alert("Enter Password");
  return false;
  }
else
return true;
}

function validateform2(form){

if ( ( form.gender[0].checked == false ) && ( form.gender[1].checked == false ) ) 
{
alert ( "Please choose your Gender: Male or Female" ); 
return false;
}
}

</script>


</div>
<div  style="background-color:#ffffff;width:6cm;height:800px;margin-top:40px;margin-left:0px;float:left"></div>
<div  style="background-color:#ffffff;width:280px;height:800px;margin-top:40px;margin-left:0px;float:left"><h2 style="color:red"><b><FONT SIZE="+3.7"><FONT COLOR="#4d265f">M</FONT><FONT COLOR="#711f4d">o</FONT><FONT COLOR="#95173a">b</FONT><FONT COLOR="#b81026">i</FONT><FONT COLOR="#dc0813">l</FONT><FONT COLOR="#ff0000">e</FONT><FONT COLOR="#f12112"> </FONT><FONT COLOR="#e34223">W</FONT><FONT COLOR="#d46435">o</FONT><FONT COLOR="#c58546">r</FONT><FONT COLOR="#b7a658">l</FONT><FONT COLOR="#a8c668">d</FONT></FONT><font><br></b>
</h2><img src="Capture.jpg" width="245px" height="245px">
<br><br>
<img src="Capture2.jpg" width="245px" height="156px"><br><br><br>
<img src="Capture3.jpg" width="245px" height="156px">
</div>
<br><br>
<div  style="background-color:#ffffff;width:320px;height:800px;margin-top:0px;margin-left:0px;float:left">
<font size="5" style="font-family:Times_New_Roman;"><br><br>Your Account is far <br>more than just Internet Voice.</font>
<br>
<font size="4" style="font-family:Segoe_UI;"><br>Talk, chat, share, schedule, store, organize, collaborate, discover, and create. Use our products from north to south, view your search history, all with one username and password, all backed up all the time and easy to find at (you guessed it) Google.com.
</font>
<br><br>
<font size="5" style="font-family:Times_New_Roman;"><br>Take it all with you.</font>
<br>
<font size="4" style="font-family:Segoe_UI;"><br>A Mobile World Account lets you access all your stuff — photos, and more — from any device. Search by taking pictures, or by voice. Get free turn-by-turn navigation, upload your pictures automatically, and even buy things with your phone using e-Wallet.</font>
<br>
<font size="5" style="font-family:Times_New_Roman;"><br>Work in the future.</font>
<br>
<font size="4" style="font-family:Segoe_UI;"><br>Get a jump on the next era of doing, well, everything. Watch as colleagues or partners drop in a photo, update a spreadsheet, or improve a paragraph, in real-time, from 1,000 miles away.</font>
</div>
<div  id="changes" style="background-color:#D8D8C7;width:10cm;height:800px;margin-top:40px;margin-left:2cm;float:left">

<div  id="changes" style="background-color:#D8D8C7;width:9cm;height:750px;margin-top:40px;margin-left:0.5cm;float:left">
<form name="form2"  action="insert.php" onsubmit="return validateform2(form2)" method="post">


<font style="font-family:Lucida Console Bold"><b>Name</b></font>
<table>
<tr>
<td><input type="text" style="font-size:14pt"; size= "10" name="a3" required placeholder="First"></td>
<td><input type="text" style="font-size:14pt"; size= "10" name="a4" required placeholder="Last"></td>
</tr>
</table>

<br>
<font size="4"><b>Choose your username</b></font><br>
<input type="email" id="txtEmail" style="font-size:14pt"; size= "27" maxlength="20" name="a5" required placeholder="E-mail"><br><br>
<font size="4"><b>Create a password:<br></b><input type="password" maxlength="6" style="font-size:14pt"; size="27" name="a6" required placeholder="Enter Password">

<font size="4"><br><br><b>Confirm your password:</b><br><input type="password" maxlength="6" style="font-size:14pt"; size="27" name="a6" required placeholder="Re-Enter Password"><br>


<br>

<font size="4"><b>Birthday</b><br><input type="date" name="date"style="width:260px;font-size:14pt" required><br>
<br><font size="4"><b>Model Interested</b><br>
<select style="width:260px;font-size:14pt">
  <option value="saab">Iphone 5s</option>
  <option value="volvo">Samsung Galaxy S4</option>
  <option value="saab">Nexus Plus PRO</option>
  <option value="saab">Apple Inspira</option>
  <option value="saab">Iphone HTC Intuition</option>
  <option value="opel">Sony Xperia Gmma</option>
  <option value="audi">Google</option>
</select>
  
<font size="4"><br><br><b>Gender</b><br></font
<table>
<td><input type="radio" name="gender" value="male"><font size=4>Male</font></td>
<td><input type="radio" name="gender" value="female"><font size=4>Female</font></td>
<table>
<tr>
<td><font size="4"><b><br>Location</b>
<select style="width:260px;font-size:14pt">
  <option value="saab">India</option>
  <option value="volvo">SaudiArabia</option>
  <option value="saab">Newyork</option>
  <option value="saab">Australia</option>
  <option value="saab">Indonesia</option>
  <option value="opel">Switzerland</option>
  <option value="audi">Geneva</option>
  <option value="audi">None Of These</option>
</select>
</td>
</tr>
</table>
<br><font size="4"><b>Mobile Phone</b><br>
<input type="tel" style="font-size:14pt"; size= "27" maxlength="10" height="4" name="a10"  required placeholder="+91 ">
<br><br><center><input type="submit"  style="font-size:14pt";size:"15";"value="submit" ></center>

</form>
</div>