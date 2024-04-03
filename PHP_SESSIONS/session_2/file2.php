<?php 

function EvenOdd($number){

   switch($number){
    case $number%2==0:
        $res="$number is Even";
        break;
    case $number%2!=0:
        $res="$number is Odd";
        break;
    default:
        $res="Error Occured";
        break;

   }
   return $res;

}


$r=EvenOdd(39);
echo $r; 
?>