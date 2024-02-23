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
<title>Title</title>
</head>
<body>
<div class="container-fluid p-5 bg-warning text-dark text-center">
    <h1 class='lead display-1 fw-bold fst-italic'>MY FAMILY STORE</h1>
    <input type="search" name="search" class='form-control'>
</div>
<!-- nav bar -->
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php">View</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="add.php">Insert</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Update</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Delete</a>
  </li>
  
</ul>

<!-- nav bar -->

<?php 

$conn= mysqli_connect('localhost', "root", "", "company");
$sql= "SELECT * FROM products";
$res= mysqli_query($conn, $sql);
if(mysqli_num_rows($res) > 0 ){
?>

<div class="container p-2">
<div class="row p-2">

<?php 
while($row= mysqli_fetch_assoc($res)){
?>


<div class="card m-2" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['pro_name'] ?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Price: <?php echo $row['pro_price'] ?></h6>
    <p class="card-text"><?php echo $row['pro_detail'] ?></p>
    <p class="card-text">Quantity: <?php echo $row['pro_quantity'] ?></p>
    <a href="#" class="card-link btn-dark btn ">View</a>
    <a href="#" class="card-link btn-dark btn ">Add to Cart</a> 
  </div>
</div>
<?php 
}
?>
</div>
</div>
<?php 
}

?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>