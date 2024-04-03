<?php 

function EvenOdd($number1, $number2){


    for($i=$number1; $i<=$number2;$i++ ){
       
        if($i%2==0){
            $even=$i." Even";
            echo $even."<br>";
        }
        else{
            $odd=$i." Odd";
            echo $odd."<br>";
        }
    }

}


echo EvenOdd(3,10);

?>

<!--  -->