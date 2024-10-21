<h1>File operations</h1>
<?php
print"<h2> Copy file</h2>";
#copy("data.txt","data2.txt")or die("cannot copy the file");
print"<br>File is copied";

print"<h2>Rename the file</h2>";
#rename("data2.txt","data5.txt")or die("cannot rename");
print"<br>File is renamed";

print"<h2>Deleting thr file</h2>";
#unlink("data5.txt")or die("cannot deklete the file");
print"<br>File is deleted";

print"<h2>Creating a folder</h2>";
#mkdir("mice");
print"<br>Folder created";

#copy("data.txt","MICE/data.txt");
print"<br>File is copied to the folder";

print"<br>Display directory";
$d=opendir(".");
    while($f=readdir($d))
        print"$f<br>";
chdir("MICE");

$d=opendir(".");
    while($f=readdir($d))
        print"$f<br>";
closedir($d);

$d=("MICE/data.txt");

print"<br>Directory name=".dirname($d);
print"<br>Filename=".basename($d);
print"<br>Your directory =".$_SERVER['PHP_SELF'];


?>