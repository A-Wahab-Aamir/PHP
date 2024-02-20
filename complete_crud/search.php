

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
<title>Crud Application | Search Data</title>
<link rel="shortcut icon" href="images/abdul.jfif" type="image/x-icon">
</head>
<body>

<div class="container-fluid bg-dark text-center fw-bolder text-white p-5">
    <h1>SEARCHED STUDENT RECORDS</h1>
    <!-- search -->
   <form action="search.php" method="get">
   <input type="text" placeholder="Search students First Name..." class="form-control m-3 p-3" name="search_keyword" >
   </form>
   <!-- search -->
</div>


<!-- nav bar -->
<div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link " aria-current="page">Home</a></li>
        <li class="nav-item"><a href="add.php" class="nav-link">Add</a></li>
        <li class="nav-item"><a href="u.php" class="nav-link">Update</a></li>
        <li class="nav-item"><a href="d.php" class="nav-link">Delete</a></li>
        <li class="nav-item"><a href="#" class="nav-link active">Search</a></li>
       
      </ul>
    </header>
  </div>

<!-- nav bar -->





<div class="container table-responsive">

<?php 
$name = $_GET['search_keyword'];
require_once ('config.php');
$sql = "SELECT * FROM STUDENTS WHERE name like '$name%' ";
$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result) >  0 ){


?>
    <table class="table mt-5 table-hover">
       <thead>
       <tr>
            <th>Students Id</th>
            <th>Students Name</th>
            <th>Students Address</th>
            <th>Students  Class</th>
            <th>Students Phone</th>
            <th>Students Gender</th>
            <th>Profile Picture</th>
            <th>Action</th>
        </tr>
       </thead>
<?php 
while($row = mysqli_fetch_assoc($result)){
?>

       <tbody>
        <tr>
            <td><?php  echo $row['id'] ?></td>
            <td><?php  echo $row['name'] ?></td>
            <td><?php  echo $row['address'] ?></td>
            <td><?php  echo $row['class'] ?></td>
            <td><?php  echo $row['phone'] ?></td>
            <td><?php  echo $row['gender'] ?></td>
            <td><img src="images/<?php  echo $row['profile_picture'] ?>" alt="Profile_picture" style="width: 100%;height:100px; object-fit: contain;"></td>
        <td>
           <a href="view.php?id=<?php echo $row['id']?>"> <img src="images/view.png" alt="" style="width: 100%;height:25px; object-fit: contain; margin: 5px; "></a>
           <a href="inline_update.php?id=<?php echo $row['id']?>"> <img src="images/update.png" alt="" style="width: 100%;height:25px; object-fit: contain; margin: 5px; "></a>
           <a href="inline_delete.php?id=<?php echo $row['id']?>" onclick="return del()"> <img src="images/delete.png" alt="" style="width: 100%;height:25px; object-fit: contain; margin: 5px; "></a>
        </td>
        </tr>
       </tbody>

<?php 
}

?>

    </table>

<?php 

}
else{

    echo "
    <table align='center' class='table mt-5 text-center'>
    <tr>
        <td><h1 style='color: red; font-size: 30px;'>🔴 NO RECORDS FOUND! 🔴</h1></td>
    </tr>
</table>



    ";
}

?>
</div>

<script>
    function del(){
        return confirm("Do You Really Want To Delete The Selected Record")
       
    }
</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>