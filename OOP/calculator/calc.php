<?php 
include('calc.inc.php');
$n1=$_POST['t1'];
$n2=$_POST['t2'];
$op=$_POST['select'];

$cal = new Calculator($n1, $n2 , $op); 
echo  $cal->Calculation(); 

?>