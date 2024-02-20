

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Crud Application | Update</title>
<link rel="shortcut icon" href="images/abdul.jfif" type="image/x-icon">
</head>
<body>
<div class="container-fluid bg-dark text-center fw-bolder text-white p-5">
<h1>UPDATE STUDENT RECORDS</h1>
    
</div>


<!-- nav bar -->
<div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="add.php" class="nav-link">Add</a></li>
        <li class="nav-item"><a href="u.php"  class="nav-link active">Update</a></li>
        <li class="nav-item"><a href="d.php" class="nav-link">Delete</a></li>
       
      
       
      </ul>
    </header>
  </div>

<!-- nav bar -->


<!-- main form -->

<!-- heading -->
<table align="center">
<tr>
        <td><h2 class="lead text-center fw-bold fs-3 fst-italic m-3 p-3">Update Student Records( <span class="text-danger">Search ID</span> )</h2></td>
    </tr>
</table>
<!-- heading -->

<div class="container">
  <form action="u.php" method="post">
    <input type="text" placeholder="Search Student Id For Update Records" name="std_id" class="form-control mt-4
     p-3">
     <input type="submit" value="Search" name="getdata" class="btn btn-dark btn-md m-3">
  </form> 
</div>


<?php 

if(isset($_POST['getdata'])){
  // 

  $stu_id = $_POST['std_id'];
  require_once ('config.php');
  $sql = "SELECT * FROM STUDENTS WHERE id = '$stu_id' ";
  $result=mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) >  0 ){
      while($row = mysqli_fetch_assoc($result)){

?>


<form action="edit.php" method="get">
    <table  class='container table table-hover' id='student_rec' align='center'>
        <tr>
            <td>
                <input type="text" value='<?php echo $row['id']?>' class='form-control' name='id'>
                 <td rowspan="6"><img src="images/<?php echo $row['profile_picture'] ?>" alt="" style="width: 100%;height:300px; object-fit: contain;" name='profile'></td>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" value='<?php echo $row['name']?>' class='form-control' name='name'>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" value='<?php echo $row['address']?>' class='form-control' name='address'>
            </td>
        </tr>
         <tr>
            <td>
                <input type="text" value='<?php echo $row['class']?>' class='form-control' name='class'>
            </td>
        </tr>
         <tr>
            <td>
                <input type="text" value='<?php echo $row['phone']?>' class='form-control' name='phone'>
            </td>
        </tr>
         <tr>
            <td>
                <input type="text" value='<?php echo $row['gender']?>' class='form-control' name='gender'>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="Update" class='btn btn-lg btn-dark'></td>
        </tr>

    </table>
</form>

<?php 

}} 

}

?>

<!-- main form -->




<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>