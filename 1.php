<!doctype html>
<head>
<title>mice</title>
</head>
<body>
<h1>Welcome!</h1>
<?php
print"I am <b>PHP</b>";
print"<br>Today is ".date ("F,d,y H:i:s"); 
echo"<br>PHP is simple";
// comment1
/* comment2*/
# comment3
$a=10;
$b=5.7;
$c="mice";
$d=TRUE;
$e=NULL;
print"<br>a=".$a;
print"<br>b=".$b;
print"<br>c=".$c;
print"<br>d=".$d;
print"<br>e=".$e;
print "<br>";
print var_dump($a).var_dump($b).var_dump($c);
printf("<br> a=%d b=%f  c=%s",$a,$b,$c);
$x=10;
$y=5;
print"<br>total=".($x+$y);
print"<br>total=".($x-$y);
print"<br>total=".($x*$y);
print"<br>total=".($x/$y);
print"<br>total=".($x%$y);
?>
</body>
</html>
