<?php

$id=  $_GET['id'];
require_once ('config.php');
$sql = "DELETE FROM `students` WHERE id='$id' ";
$result=mysqli_query($conn, $sql);
header('Location:index.php'); 






?>