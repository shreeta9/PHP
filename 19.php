 <!doctype html>
<head>
<title>mice</title>
</head>
<body>
    <?php 
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $srv="localhost:3306";
        $usr="root";
        $pwd="";
        $db="shreeta";
        try{
            $cn=new PDO("mysql:host=$srv;dbname=$db",$usr,$pwd);
            $cn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            print"<br>connection sucessful";
        }
       catch(PDOException $e){
           print"<br>connection failed".$e->getMessage();
       }

    if(isset($_POST['add'])){
        $q=$cn->prepare("insert into student values(:i,:n,:c,:d)");
        $q->bindParam(':i',$_POST['idno']);
        $q->bindparam(':n',$_POST['sname']);
        $q->bindParam(':c',$_POST['city']);
        $q->bindparam(':d',$_POST['dob']);
        $q->execute();
    
        print"<br>One record inserted";


    }
    else if(isset($_POST['display'])){
        $q=$cn->prepare("select * from student ");
        $q->execute();
        $q->setFetchMode(PDO::FETCH_ASSOC);
        print"<table border=1 >";
        foreach($q->fetchAll() as $r){
            print"<tr><td>$r[idno] </td><td>$r[sname] </td><td>$r[city]</td><td> $r[dob]</td></tr>";
        }
        print"</table>";
    }
  $cn=null;

    }

    ?>
    <form name="form1" method="post" action="<?php print htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Id No:<input type="textbox" name="idno"/><br>
        Name:<input type="textbox" name="sname"><br>
        City:<input type="textbox" name="city"><br>
        DOB:<input type="date" name="dob"><br>
        <input type="submit" value="Add" name="add" >
  
        <input type="submit" value="Display" name="display">
   
        
        </form>
        </body>
        </html>