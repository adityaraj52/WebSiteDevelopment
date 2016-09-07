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
function Overview()
{
	document.getElementById("para").innerHTML="try Me"
}

function openWin()
{
myWindow=window.open('file:///C:/Users/Aditya/Desktop/Current/current%20Web%20Project/Aboutus.htm','_self');

}
</script>


<div style="width:300px;height:620px;background-color:#FAFAFA;float:right;margin-right:16px;"><td><img src="aboutus.jpg">
<tr><dl><dt><font family="ARIAL" size="5" color="#A4A4A4">Our approach to innovation<font></dt>
<dd><font family="Times_new_roman" size="4" color="#4000FF"><br>In our endeavor to future proof the businesses of our clients, we at Mobileworld have identified seven key areas that are rapidly increasing in influence, and present great scope for IT-led innovations.</dd></dl></tr>
</font></div>

<div style="width:850px;height:630px;background-color:#CECEF6;color:#ffffff;float:left;margin-left:16px;"><a style= "text-decoration: none;color:#ff0000;">
<a style= "text-decoration: none;color:#ff0000;"><a style:"text-decoration:none;"><font color=red>Overview</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style= "text-decoration: none;color:#ff0000;"><font onclick="Overview()">ClientsSpeak</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style= "text-decoration: none;color:#ff0000;"><font onclick="Overview()">Innovation Wall</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style= "text-decoration: none;color:#ff0000;">Awards</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style= "text-decoration: none;color:#ff0000;"><font onclick="Overview()">Year 2013</font><a>


<div style="width:830px;height:600px;background-color:#CECEF6;color:#ff0000;float:left;margin-left:16px;">
<font id="para" color="#000000" size="4">
<dl>
<dt><strong>Our approach to innovation</strong></dt>

<dd>In today’s changing world, opportunities have become inseparably linked with advances in IT. In our endeavor to future proof the businesses of our clients, we at Infosys have identified seven key areas that are rapidly increasing in influence, and present great scope for IT-led innovations – Digital consumers; Emerging economies; Sustainable tomorrow; Smarter organizations; New commerce; Pervasive computing; and Healthcare economy. We believe that realizing the full potential of these drivers is important for tomorrow’s enterprise to forge ahead of its competition.
</dd>
<dt><br><strong>Digital Consumers</strong></dt>

<dd>Informed and assertive digital consumers seek compelling experiences. A digital ecosystem enables self-service as well as co-creation. Personalized solutions usher in on-demand solutions, accelerate innovation and access new demographic segments. Significantly, they maximize customer value across the lifecycle.
</dd>

<dt><br><strong>Emerging Economies</strong></dt>

<dd>Access to 'local' knowledge is critical as emerging economies transform the global marketplace. An ecosystem that harnesses collaboration helps realize 'reverse innovation' across industries. Products and services must be re-engineered, rather than re-created, to address the specific needs of micro-segments.
</dd>

<dt><br><strong>Healthcare Economy</strong></dt>

<dd>IT minimizes healthcare costs by eliminating wastage, avoiding redundant processes and incorporating best practices in treatment. Intelligent medical devices and evidence-based medicine ensure patient self-care. In addition, peer-to-peer collaboration through social media develops a preventive healthcare lifestyle.
</dd>
<dt><br><strong>New Commerce</strong></dt>

<dd>The ubiquity of the Internet and mobile devices should be harnessed to meet micro-requirements of customers. Next-generation mobility solutions co-create value by redefining stakeholder engagement. They also address differences within and across markets, and drive sustainable growth.
</dd>
</dl>
</font>
</div>
</div>
</html>