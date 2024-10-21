<?php
print"<h1>OOPs</h1>";
class std{
    private $id;
    public $name;
    public function take($i,$n){
        $this->id=$i;
        $this->name=$n;
    }
    public function show(){
        print"<br> id=".$this->id;
        print"<br> name=".$this->name;
    }
    function __construct(){
        $this->id=100;
        $this->name="shreeta";
    }
    function __destruct(){
        print"<br>bi bi";
    }
 
}
$s1=new std();
$s1->take(101,"raju");
$s1->show();
print"<br> direct name=".$s1->name;
$s2=new std();
$s2->show();




?>