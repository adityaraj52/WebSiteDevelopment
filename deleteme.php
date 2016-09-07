<font Size="7"> 
<?php
$a=" ";
if(isset($_COOKIE["username"]))
$a=$_COOKIE["username"];
unset($_COOKIE['username']);
setcookie('username', null, -1, '/');
$con=mysql_connect("localhost","root","");

if(!$con)
{ die("error".mysql_error());
}

mysql_select_db("records");
$in=mysql_query("DELETE FROM persons WHERE Email='$a' ");
$in=mysql_query("DELETE FROM cart WHERE USER_ID='$a' ");

if($in)
{
echo "<h2>Your record ".$a."has been deleted successfully";
}
echo "<br>Return To ";

?>

<a href="main.php">Home</a>
