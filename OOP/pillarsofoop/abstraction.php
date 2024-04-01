<?php 
abstract class User_Input{
    public $a;
    public $b;

    public function __construct($a, $b)
    {
        $this->a=$a; 
        $this->b=$b;
    }

    abstract protected function get();
}
// area of rectangle;
class AOR extends User_Input{
    
    public function get(){
       $res=  $this->a*$this->b;
       echo "Area of Rectangle: ".$res; 
    }
}
// area of triangle;
class AOT extends User_Input{
    
    public function get(){
       $res=  ($this->a*$this->b)/2;
       echo "Area of Triangle: ".$res; 
    }
}
//aor
$aor= new AOR(2,3);
$aor->get();
//aot
$aot= new AOT(3,3);
$aot->get();

//sum of whole suare    a^2+2ab+b^2
// volume of cylender pi*a^2+b
// volume of cone   (pi*a^2*b)/3
?>

