<?php
print"</h2>Data submitted are</h2>";
print"<br>Name=".$_POST['n'];
print"<br>City=".$_POST['c'];
print"<br>Password=".$_POST['p'];
print"<br>Gender=.".$_POST['g'];
print"<br>Qualified=".$_POST['Q'];
print"<br>Hobbies=";
print"<br>BirthDate=".$_POST['d'];
if(isset($_POST['HR']))
    print $_POST['HR'];
if(isset($_POST['HM']))
    print $_POST['HM'];
print"<br>remark=".$_POST['R'];
?>

