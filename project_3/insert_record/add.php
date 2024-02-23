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
    <h1 class='lead display-1 fw-bold fst-italic'>Insert / Add Data</h1>
    <input type="search" name="search" class='form-control'>
</div>
<!-- nav bar -->
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link " aria-current="page" href="index.php">View</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="add.php">Insert</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Update</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Delete</a>
  </li>
  
</ul>

<!-- nav bar -->



<form action="insert.php" method="get">

<table align="center" class='table'>
    <tr>
        <td><input type="text" placeholder="Enter the Product Id" class='form-control' name='t1'></td>
    </tr>
    <tr>
        <td><input type="text" placeholder="Enter the Product Name" class='form-control' name='t2'></td>
    </tr>
    <tr>
        <td><input type="text" placeholder="Enter the Product Detail" class='form-control' name='t3'></td>
    </tr>
    <tr>
        <td><input type="text" placeholder="Enter the Product Price" class='form-control' name='t4'></td>
    </tr>
    <tr>
        <td><input type="text" placeholder="Enter the Product Quantity" class='form-control' name='t5'></td>
    </tr>
    <tr>
        <td><input type="text" placeholder="Enter the Exp Date" class='form-control' name='t6'></td>
    </tr>
    <tr>
        <td><input type="submit" value="Add Data" class='btn btn-dark btn-lg'></td>
    </tr>
</table>

</form>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>