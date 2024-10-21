<h1>Array functions</h1>
<?php
$a=[10,5,7,3,1];
print"<br>find=".in_array(10,$a);
array_push($a,100,200);
print"<br pushing>";
print_r($a);
print"<br>item popped =".array_pop($a);
print"<br popped>";
print_r($a);

array_unshift($a,-12);
print"<br unshifting>";
print_r($a);

array_shift($a);
print"<br shifting>";
print_r($a);

$b=array_pad($a,10,777);
print"<br padding>";
print_r($b);

$c=array_pad($a,-10,777);
print"<brarray padding>";
print_r($c);

sort($a);
print"<br sorting>";
print_r($a);

$a=array_reverse($a);
print"<br reversing>";
print_r($a);

$d=array_merge($a,$b);
print"<br merging>";
print_r($d);

$e=array_slice($a,2,3);
print"<br slicing>";
print_r($e);
array_splice($a,2,0,555);
print"<br>";
print_r($a);

unset($a[2]);
print"<br>";
print_r($a);

function f1($i){
    print"<br>".$i*2;

}
array_walk($a,"f1");

print"<br>size of the array=".count($a);

$x=[[10,20],[30,40]];
print"<br>".$x[1][1];

var_dump($x);

print"<h2>Associated Array</h2>";
$y=["ravi"=>90,"shashi"=>50,"manu"=>35];
asort($y);
print"<br>";
print_r($y);

ksort($y);
print"<br>";
print_r($y);

$z=array_flip($y);
print"<br>";
print_r($z);

print"<table border=1>";
print"<tr><th>name</th><th>mark</th></tr>";
foreach( $y as $k=>$v){
    print"<tr><td>$k</td><td>$v</td></tr>";
}
print"</table>";

?>