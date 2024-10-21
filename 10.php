<h1>Creating file</h1>
<?php
$f=fopen("data.txt","w");
fwrite($f,"<br>name=shreeta");
fwrite($f,"<br>address=alevoor");
fwrite($f,"<br>mark=85");
fclose($f);
print"<br>Data stored in the file";



?>