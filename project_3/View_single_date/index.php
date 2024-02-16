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

<?php 
// view (see all records)
$conn = mysqli_connect('localhost', "root", "" ,"aptech");
$sql="SELECT * FROM students";
$res = mysqli_query($conn, $sql);
if(mysqli_num_rows($res) > 0 ){
?>

<table class="table table-hover table-info">
    <thead>
        <tr>
            <th>STUDENT ID</th>
            <th>STUDENT NAME</th>
            <th>STUDENT ADDRESS</th>
            <th>STUDENT  CLASS</th>
            <th>STUDENT PHONE</th>
            <th>STUDENT GENDER</th>
            <th>STUDENT PROFILE</th>
            <th>Action</th>
        </tr>
    </thead>

<?php 
while($row=mysqli_fetch_assoc($res)){


?>
    <tbody>
        <tr>
            <td><?php echo $row['id']   ?></td>
            <td><?php echo $row['name']   ?></td>
            <td><?php echo $row['address']   ?></td>
            <td><?php echo $row['class']   ?></td>
            <td><?php echo $row['phone']   ?></td>
            <td><?php echo $row['gender']   ?></td>
            <td><img src="images/<?php echo $row['profile_picture']   ?>" alt="" style='width:100%;height:100px; object-fit:contain'></td>
            <td><a href="view.php?id=<?php echo $row['id']   ?>"><img src="images/view.png ?>" alt="" style='width:100%;height:30px; object-fit:contain'></a></td>
       
        </tr>
    </tbody>

<?php 

}

?>
</table>



<?php 

}

?>






<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>