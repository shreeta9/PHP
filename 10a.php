<h1>Reading file1</h1>
<?php
if(file_exists("data.txt")){
$f=fopen("data.txt","r") or die("file not found");
$a=fread($f,filesize("data.txt"));
print"<br>$a";
fclose($f);
}
else{
    print"<br>File not found";
}

print"<h1>Reading file 2</h1>";
$f=fopen("data.txt","r");
while(!feof($f)):
    print fgetc($f);
endwhile;

print"<h1>Reading file 3</h1>";
rewind($f);
while(!feof($f)){
    print fgetss($f,100);
}
fclose($f);

print"<h1>Reading file 4</h1>";
$arr=file("data.txt");
foreach($arr as $x){
    print"<br>$x";
}

print"<h1>Reading file 5</h1>";
readfile("data.txt");
?>