<?php

$id=  $_POST['id'];
$name=  $_POST['name'];
$address= $_POST['address'];
$class= $_POST['class'];
$phone= $_POST['phone'];
$gender =$_POST['gender'];

// file uplaod to folder
$photo= $_FILES['profile_photo'];
$file_name=$_FILES['profile_photo']['name'];
$temp_name=$_FILES['profile_photo']['tmp_name'];
move_uploaded_file($temp_name , "images/".$file_name);
require_once ('config.php');
$sql = "INSERT INTO `students`(`id`, `name`, `address`, `class`, `phone`, `gender`, `profile_picture`) VALUES ('$id','$name','$address','$class','$phone','$gender','$file_name')";
$result=mysqli_query($conn, $sql);
header('Location:index.php'); 






?>