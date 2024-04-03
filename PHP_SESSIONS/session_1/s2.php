<?php 

function Calc($a, $b){

    if($a > $b){
        echo "$a is greater than $b";

    }
    else if($b > $a){
        echo "$b is greater than $a";
    }
    else{
        echo "$a is equal to $b";
    }
   
}

Calc(15,50);
?>