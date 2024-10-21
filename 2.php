<h1>Arrays</h1>
<?php 
$a[]="SHREETA";
$a[]=2024;
$a[]="Alevoor";
$a[]=TRUE;
print"<br>$a[0],$a[1],$a[2],$a[3]";
?>

<h1>Arrays2</h1>
<?php
$b=array("mice",1989,"udupi");
print var_dump($b);
?>

<h1>Associative Array</h1>
<?php
$c["name"]="Shreeta";
$c["surname"]="shetty";
print"<br>$c[name],$c[surname]";
?>

<h1>Associative Array2</h1>
<?php
$d=array("name"=>"Shreeta","age"=>"21","place"=>"udupi");
print var_dump($d);
?>

<h1>Multidimensional Array</h1>
<?php
$e[3][2]="Shreeta";
$e[4][1]=21;
print "name=".$e[3][2]."<br>age=".$e[4][1];
$f["Shreeta"]["html"]=90;
$f["shreeta"]["phpmarks"]=90;
print"<br>".$f["Shreeta"]["html"];
?>
<h1>Class And Object</h1>
<?php
class std{
    var $id;
    var $name;
    var $mark;
}
$x=new std;
$y=new std;
$x->id=101;
$x->name="shreeta";
$x->mark=90;
$y->id=102;
$y->name="sanj";
$y->mark=91;
print"<br>$x->id,$x->name,$x->mark<br>";
print  var_dump($y);
?>