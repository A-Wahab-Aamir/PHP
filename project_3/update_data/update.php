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

<div class="container-fluid bg-dark text-center text-white p-5">
        <h1>UPDATE STUDENTS RECORDS</h1>
</div>

<?php 

$std_id=$_GET['id'];
$conn = mysqli_connect("localhost", "root" , "" , "aptech"); 
$sql="SELECT * FROM students WHERE id ='$std_id' ";
$res= mysqli_query($conn, $sql); 
if(mysqli_num_rows($res) >  0 ){
while($row=mysqli_fetch_assoc($res)){


?>


<div class="container mt-5">
<form action="edit.php" method="get">
    <table class='table'>
        <tr>
        <td>
            <input type="text" class='form-control' value='<?php echo $row['id'] ?>' name='id'>
        
        
        </td>
        <td rowspan="6">
            <img src="images/<?php echo $row['profile_picture'] ?>" alt="">
        </td>
        </tr>
        <tr>
            <td><input type="text" class='form-control' value='<?php echo $row['name'] ?>' name='name'></td>
        </tr>
        <tr>
            <td><input type="text" class='form-control' value='<?php echo $row['address'] ?>' name='address'></td>
        </tr>
        <tr>
            <td><input type="text" class='form-control' value='<?php echo $row['class'] ?>' name='class'></td>
        </tr>
        <tr>
            <td><input type="text" class='form-control' value='<?php echo $row['phone'] ?>' name='phone'></td>
        </tr>
        <tr>
            <td><input type="text" class='form-control' value='<?php echo $row['gender'] ?>' name='gender'></td>
        </tr>
        <tr>
            <td><input type="submit" value="Update" class='btn btn-dark btn-lg'></td>
        </tr>
    </table>
</form>
</div>
    
<?php 
}

}


?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>