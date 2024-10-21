<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $srv="localhost:3306";
    $usr="root";
    $pwd="";
    $db="shreeta";
    try{
        $cn=new PDO("mysql:host=$srv;dbname=$db,$usr,$pwd");
        $cn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        print"<br>Connectioin sucessful";
    }
    catch(PDOException $e){
        print"<br>connection failed".$e->getMessage();
    }
if(isset($_POST['Add'])){
    $q=$cn->prepare("insert into student values(:i,:n,:c,:d)";
    $q->bindParam(':i',$_POST['idno']);
    $q->bindParam(':n',$_POST['sname']);
    $q->bindParam(':c',$_POST['city']);
    $q->bindParam(':d',$_POST["dob"]);
}



}
    
}





?>