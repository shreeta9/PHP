<h1>Storing in session variable</h1>
<?php
session_start();
$_SESSION['id']=100;
$_SESSION['name']="shreeta";
$_SESSION['mark']=85;
print"<br>Data stored";
print"<br><a href='11a.php'>Next page</a>";
# header("location:11a.php");

print"<h1>Cookies</h1>";
setcookie("college","SMVITM",time()+3600);




?>