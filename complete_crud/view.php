<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<title>Crud Application | View</title>
<link rel="shortcut icon" href="images/abdul.jfif" type="image/x-icon">
<style>
    #student_rec{
        width:50%;
        text-align:center;
         font-family: 'Trebuchet MS';
            font-size: 20px;
            font-weight: bold;
    }
    
</style>
</head>
<body>


<div class="container-fluid bg-dark text-center fw-bolder text-white p-5">
<h1>VIEW STUDENT RECORD</h1>
</div>

<!-- nav bar -->
<div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link " aria-current="page">Home</a></li>
        <li class="nav-item"><a href="add.php" class="nav-link">Add</a></li>
        <li class="nav-item"><a href="u.php" class="nav-link">Update</a></li>
        <li class="nav-item"><a href="d.php" class="nav-link">Delete</a></li>
        <li class="nav-item"><a href="#" class="nav-link active">View</a></li>
        
       
      </ul>
    </header>
  </div>

<!-- nav bar -->




<?php
$stu_id = $_GET['id'];
require_once ('config.php');
$sql = "SELECT * FROM STUDENTS WHERE id = '$stu_id' ";
$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result) >  0 ){
    while($row = mysqli_fetch_assoc($result)){

?>



<table align="center" style="margin-top:20px; " border="0" id='student_rec' class='table table-hover'>
    <tr>
        <td>Name</td>
        <td><?php echo $row['name'] ?> </td>
        <td rowspan="4"><img src="images/<?php echo $row['profile_picture'] ?>" alt="" style="width: 100%;height:300px; object-fit: contain; margin: 5px; "></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $row['address'] ?> </td>
    </tr>
    <tr>
        <td>Class</td>
        <td><?php echo $row['class'] ?> </td>
    </tr>
    <tr>
        <td>Phone</td>
        <td><?php echo $row['phone'] ?> </td>
    </tr>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>




<?php 


    }
}


?>