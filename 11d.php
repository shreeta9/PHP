<?php
session_start();
$i=$_SESSION['id'];
$n=$_SESSION['name'];
$p=$_SESSION['place'];
print"<br>id =$i name=$n place=$p";

print"<br>cookie is ".$_COOKIE['place'];

$c=file("hit.txt");
$c[0]++;
$fp=fopen("hit.txt","w");
fwrite($fp,$c[0]);
fclose($fp);
print"<br>visitor= $c[0]";


?>