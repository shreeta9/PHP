<?php
$m=$_GET["n"];
print"<br>Your mark is $m";
if($m<35){ #This is on way branching
print"<br>Your result is fail";}
else{
print"<br>you are pass";}
switch($m){
    case 100:print"<br>cent";break;
    case 50:print"<br>50";break;
    case 0:print"<br>horrrible";break;
}
print"<br>your result is:".($m>=35?"pass":"fail");

    ?>
