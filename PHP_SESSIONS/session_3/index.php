<?php 
$name=$_GET['username'];

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

<center>
<div class="container m-5 p-3">
<form action="index.php" method="get">
<table>
        <tr>
            <td><input type="text" placeholder="Enter Your Name" class='form-control m-2' name='username'></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Show" class='btn btn-dark btn-lg m-2'>
            </td>
        </tr>
        <tr>
            <td><h4><?php echo $name; ?></h4></td>
        </tr>
    </table>
</form>
</div>
</center>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>