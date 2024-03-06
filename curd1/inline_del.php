<?php
$id =$_GET['myid'];
$conn = mysqli_connect('localhost',"root","","myaptech");
$sql= "DELETE FROM students WHERE id= '$id' ";
$res=mysqli_query($conn, $sql);
header('Location: index.php');

?>