<?php 
$id= $_GET['id'];
$name= $_GET['name'];
$address= $_GET['address'];
$class= $_GET['class'];
$phone= $_GET['phone'];
$gender= $_GET['gender'];


$conn = mysqli_connect("localhost", "root" , "" , "aptech");
$sql="UPDATE `students` SET `name`='$name',`address`='$address',`class`='$class',`phone`='$phone',`gender`='$gender' WHERE id = '$id' ";
$res = mysqli_query($conn, $sql);

header("Location:index.php");

?>