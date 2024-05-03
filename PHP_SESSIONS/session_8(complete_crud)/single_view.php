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
<div class="container-fluid text-center fw-bold p-5 bg-dark text-white ">
    <h1>ADMIN MAIN PAGE</h1>
    <p>View Single Record</p>
</div>



    <?php 
$getid=$_GET['id'];
$conn = mysqli_connect("localhost", "root" , "", "commerce");
$sql = "SELECT * FROM students where id='$getid' ";
$res= mysqli_query($conn, $sql);
if(mysqli_num_rows($res) >  0 ){
?>

<table class='table table-warning table-hover text-center fw-bold'>
    <thead>
        <tr>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Student  Address</th>
            <th>Student Class</th>
            <th>Student Gender</th>
            <th>Profile Picture</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php 
while($row= mysqli_fetch_assoc($res)){

?>
    <tbody>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['address'] ?></td>
            <td><?php echo $row['class'] ?></td>
            <td><?php echo $row['gender'] ?></td>
            <td><img src="profile/<?php echo $row['profile'] ?>" alt="" style="width:100%;height:100px;object-fit:contain;"></td>
            <td>
                <a href="single_view.php?id=<?php echo $row['id'] ?>"><input type="button" value="show" class='btn btn-sm btn-dark'></a>
                <a href=""><input type="button" value="edit" class='btn btn-sm btn-dark'></a>
                <a href=""><input type="button" value="del" class='btn btn-sm btn-dark'></a>
            </td>
        </tr>
    </tbody>
<?php 
}
?>
</table>
<?php 
}

?>
</body>
</html>