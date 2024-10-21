<h1>Reference variable</h1>
<?php
$a=10;
$b=&$a;
print"<br>a=$a b=$b";
$b=20;
print"<br>a=$a b=$b";
print"<br>\"mice\"";

function f1(){ #function defination
print"<br>Good Morning";
}
f1();#function call

function add($a,$b){
return $a+$b;
}
print"<br>Total=".add(2,4);

include_once"fun.inc";
f2();

require"header.inc";

print"<h2>Function variable</h1>";
$b="f1";
$b();
print"<h1>functioin return  array</h1>";
function f3(){
    return array(10,20,30);

}
$d=f3();
print_r($d);

list($x,$y,$z)=f3();
print"<br>$x $y $z";

print"<h1>Global Array</h1>";
foreach($GLOBALS as $k=>$v){
    print"<br>$k = $v";
}

print"<h1>Range</h1>";
$m=range(1,10,2);
print_r($m);

?>