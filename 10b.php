<?php
$f=fopen("file2.txt","w");
fwrite($f,"<br>name=shreeta");
fwrite($f,"<br>address=alevoor");
fwrite($f,"<br>mark=85");
fclose($f);
print"<br>Data stored in the file";



?>