<?php 
$id= $_GET['t1'];
$name= $_GET['t2'];
$price= $_GET['t4'];
$detail= $_GET['t3'];
$quan= $_GET['t5'];
$exp= $_GET['t6'];


$conn= mysqli_connect('localhost', "root", "", "company");
$sql= "INSERT INTO `products`(`pro_id`, `pro_name`, `pro_detail`, `pro_price`, `pro_quantity`, `exp_date`) VALUES ('$id' , '$name' , '$detail' , '$price' , '$quan' , '$exp')";
$res= mysqli_query($conn, $sql);
header('Location:index.php');

?>