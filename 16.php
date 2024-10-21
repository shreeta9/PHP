<!doctype html>
<head>
    <title>mice</title>
    </head>
    <body>
        <h1>Validation</h1>
    <?php
    $iderr=$namerr=$cityerr=$dateerr="";
    $idno=$name=$city=$dob="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["idno"])){
            $iderr="Id is required";
        }
        if(!preg_match("/^[0-9]*$/",$_POST["idno"])){
            $iderr="Only numbers are allowed";
        }
        if(!preg_match("/^[a-z A-Z]*$/",$_POST["sname"])){
            $namerr="name is invalid";
        }
        if(!preg_match("/udupi|manipal/",$_POST["city"])){
            $cityerr="city is not valid";
        }
        if($_POST["dob"]>='2010/1/1'){
            $dateerr="dob is invalid";
        }
        $idno=$_POST["idno"];
        $name=$_POST["sname"];
        $city=$_POST["city"];
        $dob=$_POST["dob"]; 
        print"<br>Idno=$idno";
        print"<br>Name=$name";
        print"<br>City=$city";
        print"<br>DOB=$dob";    

    }




?>
<form name="f1" method="POST" action="16.php">
    Id No:<input type="text" name="idno" value="<?php print $idno?>"> <?php print $iderr ?><br>
    Name:<input type="text" name="sname" value="<?php print $name ?>"><?php print $namerr ?><br>
    City:<input type="text" name="city" value="<?php print $city ?>"><?php print $cityerr ?><br>
    DOB:<input type="date" name="dob" value="<?php print $dob ?>"><?php print $dateerr ?><br>
    <input type="submit" name="submit" value="submit">
    </form>
    </body>
    </html>