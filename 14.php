<?php
$cn=mysqli_connect("localhost:3306","root","");
if(!$cn)die("conncetion failed");
else
    print"<br>connection sucessful";
$db="shreeta1234";
// if(!mysqli_query($cn,"create database $db"))die("cannot create database");
// else
//     print"<br>Created database";

if(!mysqli_select_db($cn,$db))
    die("unable to coonect");
else
    echo"<br>database is selected";

/*$tb="create table student(idno int,name varchar(20),city varchar(10),dob date)";
if(!mysqli_query($cn,$tb))
    die("cannot create table");
else
    echo"<br>table created";*/

$r1="insert into student values(103,'aju','malpe','1991/10/1')";
 if(!mysqli_query($cn,$r1))
    die(mysqli_error($cn));
else
    echo"<br>record inserted";
  

$d=mysqli_query($cn,"select * from student where city='udupi'");
while($r=mysqli_fetch_row($d)){
    print"<br>id=$r[0] name=$r[1] city=$r[2] dob=$r[3]";
}

 mysqli_close($cn);
        ?>