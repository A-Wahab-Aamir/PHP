<?php 

require_once('db.php');

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
    <h1>Admin Panel</h1>
</div>

<center>
    <div class="container p-3 m-3">
        <form method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><input type="text" name='name' placeholder="Enter Naat Name" class='form-control m-3'></td>
            </tr>
            <tr>
                <td><input type="text" name='desc' placeholder="Enter Naat Description" class='form-control m-3'></td>
            </tr>
            <tr>
                <td><input type="file" name="path" class='form-control m-3'></td>
            </tr>
            <tr>
                <td><input type="submit" value="Add Records" class='btn btn-dark m-3' name='insert_data'></td>
            </tr>

        </table>
        </form>
    </div>
</center>

<?php 

if(isset($_POST['insert_data'])){
    $name=$_POST['name'];
    $desc=$_POST['desc'];
    // $path=$_POST['path'];
    $file_name=$_FILES['path']['name'];
    $tmp_name=$_FILES['path']['tmp_name'];
    move_uploaded_file($tmp_name, "video/".$file_name);
    $db->Insert($name,  $desc,$file_name);
    if($db){
        echo "<script>alert('Record Successfully added to weebsite!')</script>";
    }
}


?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>