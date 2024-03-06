<?php 
$id = $_GET['id'];
$name = $_GET['name'];
$class = $_GET['class'];
$address = $_GET['address'];
$phone = $_GET['phone'];
$gender = $_GET['gender'];


$conn= mysqli_connect('localhost', "root", "", "myaptech");
$sql = "UPDATE students SET name = '$name' , class = '$class' , address = '$address' , phone='$phone' , gender= '$gender' WHERE id = '$id' ";

$res = mysqli_query($conn, $sql);
header('Location: index.php');