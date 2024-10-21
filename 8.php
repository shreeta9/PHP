<?php
$m=$_GET["n"];

print"<br>Your mark is $m";
if($m<35){   #This is on way branching
    print"<br>Your result is fail";
    print"<br>You need improvement";
}
print"<br>Thank You for checking result";

if($m>=35){  #two way barnching
    print"<br>Your result is pass";
    print"<br>Comgraulations";
}
else{
    print"<br>Your result is fail";
    print"<br>Better luck next time";
}
print"<br>Have a good day!";

print"<h1>Mutli way barnching</h1>";
if($m>=85)
    print"<br>Result is distinctoin";
else if($m>=60)
    print"<br>Result is first class";
else if($m>=50)
    print"<br> Result is Second class";
else if($m>=35)
    print"<br>Result is pass";
else
    print"<br>Result is fail";

print"<h1>Multiple Branching using switch case</h1>";
switch($m){
    case 100:print"<br>Cent Percent Pass";break;
    case 50:print"<br>50 50";break;
    case 0:print"<br>Horrible";break;
    default:print"<br>normal";
}

print"<h1>Logical Operator</h1>";
if($m>=40 and $m<=60)
    print"<br>Mark between 40 to 60";
if($m%3==0 || $m%5==0)
    print"<br>Your mark is divisible by 3 or 5";

print"<h1>Ternary Operator ?: </h1>";
print"<br>your result is ".($m>=35?"pass":"fail");



?>