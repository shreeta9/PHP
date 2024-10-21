<?php
print"<h2>Using MySQL</h2>";
$cn=mysqli_connect("localhost:3306","root","");
if(!$cn)die("Connection failed");
else
    echo"<br>connection suceesful";

$db="shreeta";
/*if(!mysqli_query($cn,"create database $db"))
    die("cannot create databasae");
else
    print"<br>database created";*/
if(!mysqli_select_db($cn,$db))
    die("unable to open database");
else
    print"<br>Database is selected";

/*$tb="create table student(idno int,sname varchar(20),city varchar(10),dob date)";
if(!mysqli_query($cn,$tb))
    die("cannot create table");
else
    print"<br>table created";*/
/*
$r1="insert into student values(102,'aju','kapu','1991/11/2')";
if(!mysqli_query($cn,$r1))
    die(mysqli_error($cn));
else
    print"<br>Record inserted";
*/

print"<h2>Display records</h2>";
$d=mysqli_query($cn,"select * from student where city='udupi' ");
while($r=mysqli_fetch_row($d)){
    print"<br>id=$r[0] name=$r[1] city=$r[2] dob=$r[3]";

}

    mysqli_close($cn);    
        ?>