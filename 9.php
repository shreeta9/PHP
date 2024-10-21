<!doctype html>
<head>
    <title>mice</title>
    </head>
    <body>
           <?php
         
           $n1=$_POST['n1'];
           $n2=$_POST['n2'];

           
            if(isset ($_POST['add']))
                $total=$_POST['n1']+$_POST['n2'];
            else if(isset($_POST['substract']))
                $total=$_POST['n1']-$_POST['n2'];
            else if(isset($_POST['multiply']))
                $total=$_POST['n1']*$_POST['n2'];
            else if(isset ($_POST['divide']))
                $total=$_POST['n1']/$_POST['n2'];

             
            ?>
        <form name="f1" action="9.php" method="POST">
           number1:<input type="text" name="n1" value="<?php print $n1?>"><br> 
            number2:<input type="text" name="n2" value="<?php print $n2?>"><br> 
            result=<input type="text" name="result" value="<?php print $total?>"><br>
            <input type="submit" value="Add" name="add" />
            <input type="submit" value="Substract" name="substract"/>
            <input type="submit" value="Multiply" name="multiply"/>
            <input type="submit" value="Divide" name="divide"/>
            </form>
         
            </body>
            </html>



