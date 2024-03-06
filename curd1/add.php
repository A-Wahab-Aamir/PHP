<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

</head>
<body>
      <div class="container-fluid bg-dark text-center text-white p-5">
        <h1 class="display-1">ADD STUDENTS RECORDS</h1>

    </div>

<!-- nav bar -->
<ul class="nav justify-content-center p-5">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="add.php">Add </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Update</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="#">Delete</a>
  </li>
</ul>


<!-- nav bar -->


<!-- form  -->

<div class="container">
<form action="getdata.php" method="post" enctype="multipart/form-data">
<table>
<tr>
    <td><input type="text" placeholder="Enter Id" name="id" class='form-control'></td>
</tr>
<tr>
    <td><input type="text" placeholder="Enter name" name="name" class='form-control'></td>
</tr>
<tr>
    <td><input type="text" placeholder="Enter address" name="address" class='form-control'></td>
</tr>
<tr>
    <td><input type="text" placeholder="Enter class" name="class" class='form-control'></td>
</tr>
<tr>
    <td><input type="text" placeholder="Enter phone" name="phone" class='form-control'></td>
</tr>
<tr>
    <td><input type="text" placeholder="Enter gender" name="gender" class='form-control'></td>
</tr>
<tr>
    <td><input type="file" name="picture" class='form-control'></td>
</tr>
<tr>
<td><input type="submit" value="Add Records" class="btn btn-dark"></td>
</tr>
</table>

</form>

</div>





</body>
</html>