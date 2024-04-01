<?php 
class AOC{
    const PI=3.142;

    public function AOC($r){
        $res= self::PI*$r**2;
        echo "AOC: $res";
    }
}

$obj=new AOC();
$obj->AOC(2);
?>