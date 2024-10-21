<?php
class std{
    private $id;
    public $name;
    public function tak($i,$n){
        $this->id=$i;
        $this->name=$n;
    }
    public function sho(){
        print"<br> id=".$this->id;
        print"<br> name=".$this->name;
    }
    function __construct(){
        $this->id=112;
        $this->name="rashi";
    }
    function __destruct(){
        print"<br>bi";
    }
}
$s1=new std();
$s1->tak(110,"shashi");
$s1->sho();
$s2=new std();
$s2->tak(111,"kashi");
$s2->sho();
$s3=new std();
$s3->sho();

?>