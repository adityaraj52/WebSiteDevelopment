<html>
<head>
<link type="text/css" rel="stylesheet" href="indiastyle.css"></head>
<form method="get" action="viewcart.php"><body background="launch.jpg">
<div id="none" style= "background-color:#D8D8D8;HEIGHT:100PX;width:1340px;margin-left:0px;padding-top:0.1px">

<h4 style="margin-left:0px">Buy Online or Call 1-800-425-4026 or 080-2506-8026
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

<div id="none" style= "background-color:#0080FF;HEIGHT:50PX;width:940px;margin-left:0px;margin-top:10px">
<div id="none" style= "background-color:#0080FF;HEIGHT:50PX;width:940px;margin-left:400px;">
<div style="margin-top:12px;float:left"><font size="5px"><a href="Main.php" style="text-decoration: none ;color:#ffffff;">Home</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Aboutus.php" style="text-decoration:none;color:#ffffff">About Us</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="gallery.php" style="text-decoration: none;color:#ffffff">Gallery</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contactus.php" style="text-decoration: none;color:#ffffff">Contact Us</a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<font size="5px" color="#ffffff">Enter ID to retrieve :<input type ="text" size="5" name="proid"></font>
<input type="submit" size="500px" style="float:right;width:150px;height:25px;size:1500px">
</form>
</div></div></div>

</div>



<script>
var i=1;
var im=new Array("g1.jpg","g2.jpg","g3.jpg","g4.jpg","g5.jpg","g6.jpg","g7.jpg","g8.jpg");
var y=window.setInterval(function(){slideshow()},2000);
function slideshow()
{
document.getElementById("my").src=im[i];
i=(i+1)%8;
}
</script>
<script>
function getCookie(c_name)
{
var c_value = document.cookie;
var c_start = c_value.indexOf(" " + c_name + "=");
if (c_start == -1)
  {
  c_start = c_value.indexOf(c_name + "=");
  }
if (c_start == -1)
  {
  c_value = null;
  }
else
  {
  c_start = c_value.indexOf("=", c_start) + 1;
  var c_end = c_value.indexOf(";", c_start);
  if (c_end == -1)
    {
    c_end = c_value.length;
    }
  c_value = unescape(c_value.substring(c_start,c_end));
  }
return c_value;
}

function setCookie(c_name,value,exdays)
{
var exdate=new Date();
exdate.setDate(exdate.getDate() + exdays);
var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
document.cookie=c_name + "=" + c_value;
}

function checkCookie()
{
var username=getCookie("username");
if (username!=null && username!="")
  {
  alert("Welcome again " + username);
  }
else 
  {
  username=prompt("Please enter your name:","");
  if (username!=null && username!="")
    {
    setCookie("username",username,365);
    }
  }
}
</script>

<div style="width:1360px; height:200px;margin-left:100PX"><br>

<TABLE>
<TR>

<TD WIDTH="280" HEIGHT="200" BACKGROUND="g12.jpg" VALIGN="bottom">
<FONT SIZE="+4" COLOR="red">1</FONT></TD>

<TD WIDTH="280" HEIGHT="200" BACKGROUND="g15.jpg" VALIGN="bottom">
<FONT SIZE="+4" COLOR="red">2</FONT></TD>

<TD WIDTH="280" HEIGHT="200" BACKGROUND="g14.jpg" VALIGN="bottom">
<FONT SIZE="+4" COLOR="red">3</FONT></TD>

<TD WIDTH="280" HEIGHT="200" BACKGROUND="g16.jpg" VALIGN="bottom">
<FONT SIZE="+4" COLOR="red">4</FONT></TD>
</tr>
</table>
<center><img src="g1.jpg" height="500px" width="1024px" style="margin-left:-200px" id='my'></center>

<TABLE>
<TR>

<TD WIDTH="280" HEIGHT="200" BACKGROUND="g11.jpg" VALIGN="bottom">
<FONT SIZE="+4" COLOR="red">5</FONT></TD>

<TD WIDTH="280" HEIGHT="200" BACKGROUND="g13.jpg" VALIGN="bottom">
<FONT SIZE="+4" COLOR="red">6</FONT></TD>

<TD WIDTH="280" HEIGHT="200" BACKGROUND="g17.jpg" VALIGN="bottom">
<FONT SIZE="+4" COLOR="red">7</FONT></TD>

<TD WIDTH="280" HEIGHT="200" BACKGROUND="g18.jpg" VALIGN="bottom">
<FONT SIZE="+4" COLOR="red">8</FONT></TD>
</tr>
</table>
</html>