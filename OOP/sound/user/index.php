<?php 

require_once('../admin/db.php');

?>

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
<div class="container-fluid bg-warning text-center display-3 p-5 lead">
    <h1>PLAY MUSIC, AND GET SATISFIED!</h1>
</div>
<!-- nav bar -->
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Vidoes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Purchase</a>
  </li>
</ul>
<!-- nav bar -->
<div class="container">
<div class="row">
    <?php 

    $res= $db->Show_Records();
    while($row=mysqli_fetch_assoc($res)){

  


?>
    
    <div class="m-3 p-3" style="width: 25rem;">
    <video class="card-img-top" width="320" height="240" controls autoplay>
  <source src="../admin/video/<?php echo $row['path']; ?>" type="video/mp4">
</video>
  <div class="card-body">
    <p class="card-text text-center fw-bold lead"><?php echo $row['name']; ?></p>
    <a href="view.php?id=<?php echo $row['id']; ?>"><input type="button" value="View Natt" class='btn btn-dark d-grid gap-2 col-6 mx-auto'></a>
  </div>
</div>
    <?php 

}

?>
 </div>
</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>