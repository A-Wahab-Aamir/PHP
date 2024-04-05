<?php 
require_once('../admin/db.php');
$id=$_GET['id'];
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
    <h1>View MUSIC, AND GET SATISFIED!</h1>
</div>

<div class="container">
<div class="row">
    <?php 

    $res= $db->View_Records($id);
    $row=mysqli_fetch_assoc($res);
?>
    
    <div class="m-3 p-3" style="width: 300rem;">
    <video class="card-img-top" width="420" height="240" controls autoplay>
  <source src="../admin/video/<?php echo $row['path']; ?>" type="video/mp4">
</video>
  <div class="card-body">
    <p class="card-text text-center fw-bold lead"><?php echo $row['name']; ?></p>
    
    <form method="post">
        <input type="text" placeholder="Drop Your Comments" class='form-control m-3' name='comm'>
        <input type="submit" value="Add" name='add_comments' class='btn btn-dark d-grid gap-2 col-6 mx-auto m-3'>
        <a href="../admin/video/<?php echo $row['path']; ?>" Download><p>Download Video</p> </a>
    </form>  

    <p class='text-center fw-bold text-danger'><?php echo $row['comments']; ?></p>
</div>

</div>
    <?php 

if(isset($_POST['add_comments'])){
    $comm= $_POST['comm'];
    $db->Add_Comments($comm, $id);
    
}

?>
 </div>
</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>