 <!doctype html>
<head>
<title>mice</title>
</head>
<body>
    <?php 
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $cn=mysqli_connect("localhost:3306","root","");
    if(!$cn)die("conncetion failed");
    else
        print"<br>connection sucessful";
    

    $db="shreeta";
    if(!mysqli_select_db($cn,$db))
        die("unable to coonect");
    else
        echo"<br>database is selected";

    if(isset($_POST['add'])){
        $q="insert into student value($_POST[idno],'$_POST[sname]','$_POST[city]','$_POST[dob]')";
        if(!mysqli_query($cn,$q))die(mysqli_error($cn));
        print"<br>One record inserted";

       }
    else if(isset($_POST['update'])){
        $q="update student set sname='$_POST[sname]', city='$_POST[city]',dob='$_POST[dob]' where idno=$_POST[idno]";
        if(!mysqli_query($cn,$q))die(mysqli_error($cn));
        print"<br>One record updated";
    }
    else if(isset($_POST['delete'])){
        $q="delete from student where idno=$_POST[idno]";
        if(!mysqli_query($cn,$q))die(mysqli_error($cn));
        print"<br>One record Deleted";
    }
    else if(isset($_POST['display'])){
        $q="select * from student ";
        $t=mysqli_query($cn,$q);
        print"<table border=1 >";
        while($r=mysqli_fetch_array($t,MYSQLI_ASSOC)){
            print"<tr><td>$r[idno] </td><td>$r[sname] </td><td>$r[city]</td><td> $r[dob]</td></tr>";
        }
        print"</table>";
    }
    mysqli_close($cn);

    }

    ?>
    <form name="form1" method="post" action="<?php print htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Id No:<input type="textbox" name="idno"/><br>
        Name:<input type="textbox" name="sname"><br>
        City:<input type="textbox" name="city"><br>
        DOB:<input type="date" name="dob"><br>
        <input type="submit" value="Add" name="add" >
        <input type="submit" value="Update" name="update">
        <input type="submit" value="Delete" name="delete">
        <input type="submit" value="Display" name="display">
   
        
        </form>
        </body>
        </html>