<?php

$con= mysql_connect("localhost","root","");
mysql_select_db("product",$con);
$result = mysql_query("SELECT * FROM persons",$con);
$x=$_POST['f7'];
while($row = mysql_fetch_array($result))
{	
	if( !strcmp($row['BRAND'],$x))
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
?>
<center>
<div id="meer" style="width:720px;background-color:#0080AA;height:660px;margin-top:20px">
<form action="update_cart.php" method="post">
<table border="2" width="720">
<tr style="font-size:30;height:80">
<th width="360" >Fields</th>
<th width="360" >View Info</th>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" >Product_ID</th>
<th width="360" ><?php echo $e1;?></th>
</tr>



<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="35">M_NO</th>
<th width="360" height="35"><?php echo $e2;?></th>

</tr>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="20">QUANTITY</th>
<th width="360" height="20">
<div width="50px" height="60">
<div width="30px" height="60" style="background-color:#ffffff;margin-left:1.3cm;margin-right:1.3cm">

<font style="background-color:#ffffff;size:17pt;color:#000000"><?php echo $e3;?></font></th>
</div>
</tr>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="20">NAME</th>
<th width="360" height="20"><?php echo $e4;?></th>
</tr>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="20">IMAGE</th>

<th width="360" height="20">
<?php echo $e5;?>
</th>
</tr>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="20">DESCRIPTION</th>
<th width="360" height="20">

<?php echo $e6;?>
</th>
</tr>


<tr style="font-size:25;color:#ffffff;height:60">
<th width="360" height="20">BRAND</th>
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

<table border="3">
<tr style="font-size:25;color:#ffffff;height:60">
<th width="720" height="20"><input type="submit" style="font-size:17pt" value="Submit"</th>
</tr>
</table>