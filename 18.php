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
class std2 extends std{
    protected $city;
    public function take($c){
        $this->city=$c;
    }
    public function display(){
        parent::show();
        print"<br>city=".$this->city;
    }
}
interface decorate{
    function plus();
    function star();

}
class house implements decorate{
  function plus(){
      print"<br>++++++++++++++";

  }
  function star(){
      print"<br>***************";
  }
}
trait utility{
    function dash(){
        print"<br>---------";
    }

}
class shop { 
    use utility; 
    function equal(){
        print"<br>=========";
    }
}

$s1=new std();
$s1->take(101,"raju");
$s1->show();
#print"<br> direct name=".$s1->name;
$s2=new std();
$s2->show();
print"<h2>Inheritance</h2>";
$s3=new std2();
$s3->take("udupi");
$s3->display();
print"<h2>Interface</h2>";
$h1=new house();
$h1->plus();
$h1->star();
print"<h2>Trait</h2>";
$x=new shop();
$x->equal();
$x->dash();


?>