<?php
$a=10;
$b=&$a;
print"<br>$b $a";
$b=20;
print"<br>$b $a";

function f1(){
    print"<br>GM";
}
f1();
function add($x,$y){
    return $x+$y;
}
print"<br>total=".add(2,3);

include_once"fun.inc";
f2();

$b="f1";
$b();
function f3(){
    return array(1,2,3);
}
$d=f3();
print_r($d);

list($x,$y,$z)=f3();
print"<br>$x $y $z";

$e=range(1,10,3);
print_r($e);
?>
