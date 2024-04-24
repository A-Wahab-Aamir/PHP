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
<div class="container">
    <div class="row">
<?php 
$conn= mysqli_connect("localhost", "root", "", "commerce");
$query="SELECT * FROM `products` ";
$res= mysqli_query($conn, $query);
if(mysqli_num_rows($res) > 0){
while($row= mysqli_fetch_assoc($res)){
?>
<!-- card -->
<div class="card m-3 p-3" style="width: 18rem;">
  <img src="<?php echo $row['picture'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['name'] ?></h5>
    <p class="card-text"><?php echo $row['description'] ?></p>
    <p class="card-text">Rs: <?php echo $row['price'] ?> PKR</p>
    <a href="#" class="btn btn-primary">View Products</a>
  </div>
</div>
<!-- card -->
<?php 
}
}
?>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>