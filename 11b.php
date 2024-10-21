<?php
session_start();
$_SESSION['id']=100;
$_SESSION['name']="shreeta";
$_SESSION['place']="udupi";
print"<br>Data stored";
print"<br><a href='11d.php'>Next page</a>";
print"<br>Cookies";
setcookie("place","udupi",time()+3600);
?>