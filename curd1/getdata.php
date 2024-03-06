<?php 

$id = $_POST['id'];
$name = $_POST['name'];
$class = $_POST['class'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$filename=$_FILES['picture']['name'];
$tmp_name=$_FILES['picture']['tmp_name'];
move_uploaded_file($tmp_name, "images/".$filename);
$conn= mysqli_connect('localhost', 'root','', "myaptech");
$sql="INSERT INTO `students`(`id`, `name`, `address`, `class`, `phone`, `gender`, `profile_picture`) VALUES ('$id','$name','$address','$class','$phone','$gender','$filename')";
$res=mysqli_query($conn, $sql);
header('Location:index.php');
?>