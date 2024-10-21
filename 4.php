<h1>Looping</h1>
<?php
$a=1;
while($a<=5){
print"<br>Shreeta $a";
$a++;
}

print"<br><h1>Loop2</h1>";

$a=50;
while($a<=55):
print"<br>Mice $a";
$a++;
endwhile;

print"<br><h1>Loop 3</h1>";

$a=10;
do{
    print"<br>Akshaya $a";
    $a--;
}while($a>5);

print"<br><h1>Loop 4</h1>";

for($a=1;$a<=5;$a++){
    print"<br>Hardhik $a";
}

print"<br><h1>Loop 5</h1>";
for($a=0;$a<5;$a++):
print"<br>karthik $a";
endfor;

print"<h1>Loop with array</h1>";
$x=[10,20,30,40,50];
for($a=0;$a<count($x);$a++){
    print"<br>array=$x[$a]";    
}

print"<h1>Loop with array2</h1>";
foreach($x as $i):
print"<br>array=$i";
endforeach;

print"<h1>Loop with Associsated array</h1>";
$y=["ravi"=>90,"shashi"=>70,"kashi"=>60];
foreach($y as $k=>$v):
print"<br>$k has the mark $v";
endforeach;

print"<h1>For loop with multiple index</h1>";
for($a=1,$b=5,$c=10;$a<=5;$a++,$b++,$c--){
    print"<br>$a $b $c";
}

print"<h1>Breaking Loop</h1>";
for($a=1;$a<=10;$a++){
   if($a==5)break;
   print"<br>vinaya $a"; 
}

print"<h1>Skipping the loop</h1>";
for($a=1;$a<=10;$a++){
    if($a==5)continue;
    print"<br>udupi $a";
}
?>