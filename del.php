<?php
$con=mysql_connect("localhost","root","");
echo $_SESSION['username'];

if(!$con)
{ die("error".mysql_error());
}

mysql_select_db("records");

$in=mysql_query("DELETE FROM persons WHERE First='Aditya'");
if($in)
{
echo "Record deleted successfully ";
}
else
{
mysql_error();
}
?>
