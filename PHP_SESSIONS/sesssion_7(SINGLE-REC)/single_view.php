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
$myid=$_GET['id'];
$query="SELECT * FROM `products` WHERE id=$myid ";
$res= mysqli_query($conn, $query);
if(mysqli_num_rows($res) > 0){
while($row= mysqli_fetch_assoc($res)){
?>
<!-- card -->
<table class='mt-5 p-3' border='1'>
    <tr>
        <td><img src="<?php echo $row['picture'] ?>" class="img-fluid" ></td>
        <td>
            <h2 class='lead m-3 fw-bold fst-italic display-4'><?php echo $row['name'] ?></h2>
            <h4 class='lead m-3 fw-bold fst-italic'><?php echo $row['description'] ?></h4>
            <h4 class='lead m-3 fw-bold fst-italic'>Total: <?php echo $row['quantity'] ?> Peices</h4>
            <h4 class='lead m-3 fw-bold fst-italic'>RS <?php echo $row['price'] ?>. PKR</h4>
           
        </td>
  
</table>
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