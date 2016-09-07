<font Size="9">You have been Successfully logged out  :</font>

<font Size="7"> 
<?php
if(isset($_COOKIE["username"]))
 unset($_COOKIE['username']);
 setcookie('username', null, -1, '/');

?>
</font>
<font Size="5">
<br>Click Here to Goto <a href='Main.php'>home</a>
</font>