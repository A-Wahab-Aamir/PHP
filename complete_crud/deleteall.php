<?php
require_once ('config.php');
$sql = "DELETE FROM `students`";
$result=mysqli_query($conn, $sql);
header('Location:index.php'); 
?>