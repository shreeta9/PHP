<h1>Functions</h1>
<?php
//declare(strict_types=1);
$a=20;
function f1(){
    $a=10;
    static $b=5;
    print"<br>-----------------------";
    print"<br>Shreeta Shetty $a";
    print"<br>-----------------------";
    print"<br>".++$b;
    }
function f2(){
    global $a;
    print"<br>function2 $a";
}
function f3($n="mice"){
    print"<br>Good Morning $n";
    }
function f4($x,$y){
    $z=$x+$y;
    return $z;
}
f1();
f1();
f2();
f3("Shreeta");
f3("Akshaya");
f3();//default parameter
print"<br>Total=".f4(4,5);
print"<br>$a";

$a=10;
$b=3.4;
$c=(float)$a+$b;
print"<br>c=$c";    
$c=$a+(int)$b;
print"<br>c=$c";    
$e=(array)$a;
var_dump($e);
?>