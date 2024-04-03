<?php

// conditional statement 
// if else
// switch case

function Calc($n1, $n2, $operator)
{

    switch ($operator) {
        case "add":
            $res = $n1 + $n2;
            break;
        case "sub":
            $res = $n1 - $n2;
            break;
        case "mul":
            $res = $n1 * $n2;
            break;
        case "div":
            $res = $n1 / $n2;
            break;
        case "pow":
            $res = $n1 ** $n2;
            break;
        default:
            $res="No Operator Found!"; 
            break;
         
    }
   
    return $res;
}

echo Calc(12, 12, "pow")."<br>";
echo Calc(1, 3, "sub");