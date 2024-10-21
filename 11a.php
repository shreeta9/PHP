<h1>reading session variable</h1>
<?php
session_start();
$i=$_SESSION['id'];
$n=$_SESSION['name'];
$m=$_SESSION['mark'];
print"<br>id=$i name=$n mark=$m";

print"<br>Your college name=".$_COOKIE["college"];

print"<h1>Hit counter</h1>";
$c=file("hit.txt");
$c[0]++;
$fp=fopen("hit.txt","w");
fwrite($fp,$c[0]);
fclose($fp);
print"<br><h5>You are the visitor no=$c[0]</h5>";

?>