<?php 
$std_id = $_GET['id'];
$conn= mysqli_connect('localhost',"root","","aptech");
$sql = "DELETE FROM students WHERE id = '$std_id' ";
$res= mysqli_query($conn, $sql);
header('Location:index.php');





?>