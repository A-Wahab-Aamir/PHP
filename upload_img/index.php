<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <form method="post" enctype="multipart/form-data">

            <input type="file" name="img" class="form-control m-3">
            <input type="submit" value="Upload File" name="getfile" class="btn btn-dark">
           
        </form>
    </div>
    <?php
    if (isset($_POST['getfile'])) {

        $file_name = $_FILES['img']['name'];
        $tmp_name = $_FILES['img']['tmp_name'];
        move_uploaded_file($tmp_name , "img/".$file_name);
        $conn=mysqli_connect('localhost',"root","", "myaptech");
        $sql="INSERT INTO `file`(`img`) VALUES ('$file_name')";
        $res=mysqli_query($conn, $sql);
    }
    ?>
<center>
 <img src="img/<?php echo $file_name ?>" alt="">
</center>
</body>

</html>
