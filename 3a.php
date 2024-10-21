<?php
$a=10;
function f1(){
    $a=2;
    static $b=3;
     print"<br>-----------------------";
    print"<br>Shreeta Shetty ".++$b;
     print"<br>-----------------------";
}
function f2(){
global $a;   
print"<br> $a";
}
function f3($n=15){
    print"<br>$n";
}
function f4($x,$y){
    $c=$x+$y;
    return $c;
}
f1();
f2();
f3("Shreeta");
f3("Aksha");
f3();
print"<br>Total=".f4(2,2);
$a=5;
$b=5.6;
$c=$a+(int)$b;
print"<br>$c";
$c=(array)$a;
var_dump($c);   
?>