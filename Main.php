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


<script>
var i=1;
var im=new Array("21.jpg","22.jpg","23.jpg","24.jpg","25.jpg","26.jpg","27.jpg","11.jpg","12.jpg","13.jpg","14.jpg","15.jpg","16.jpg","17.jpg","18.jpg","19.jpg","20.jpg");
var y=window.setInterval(function(){slideshow()},2000);
function slideshow()
{
document.getElementById("my").src=im[i];
i=(i+1)%16;
}
</script>
</head>
<body>
<div style="float:left;margin-top:20px;margin-left:0px;width:1330px;height:550px">
<img src="21.jpg" height="500px" width="1024px" id='my'/>
<div style="Height:50px;width:1052px;margin-left:138px"><h2><marquee bgcolor="#0080FF";behavior="alternate";direction="right";hspace:4px;loop=60;text-align:right;scrolldelay=20;width=150%> <b><font color=#000000 size=4px><center>To be Launched Soon</font></b></marquee></h2>
</div>
</div>
<center><img src="not.jpg" height="480px" width="526px"></td>
<img src="bubble.jpg" height="480px" width="526px"></center>