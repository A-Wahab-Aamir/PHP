<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>

<body>
    <div class="container-fluid bg-dark text-center text-white p-5">
        <h1 class="display-1">VIEW STUDENTS RECORDS</h1>
<form action="search.php" method="get">
<input type="search" name="query" class="form-control">
</form>
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
    <?php
    $conn = mysqli_connect("localhost", "root", "", "myaptech");
    $sql = 'SELECT * FROM students ';
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) >  0) {
    ?>

        <table class="table table-hover table-info ">
            <thead>
                <tr>
                    <th>Student Id</th>
                    <th>Student Name</th>
                    <th>Student Address</th>
                    <th>Student Class</th>
                    <th>Phone</th>
                    <th>Student Gender</th>
                    <th>Student Profile</th>
                    <th>Action</th>
                </tr>
            </thead>


            <?php
            while ($row = mysqli_fetch_assoc($res)) {
            ?>

                <tbody>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['address'] ?></td>
                        <td><?php echo $row['class'] ?></td>
                        <td><?php echo $row['phone'] ?></td>
                        <td><?php echo $row['gender'] ?></td>
                        <td><img src="images/<?php echo $row['profile_picture'] ?>" alt="" style='width:100%;height:200px;object-fit:contain'></td>
<td>
<a href="view.php?myid=<?php echo $row['id'] ?>"><img src="images/view.png" alt="" srcset=""  style='width:100%;height:30px;object-fit:contain; margin:5px;'></a>
<a href="inline_update.php?myid=<?php echo $row['id'] ?>"><img src="images/update.png" alt="" srcset=""  style='width:100%;height:30px;object-fit:contain; margin:5px;'></a>
<a href="inline_del.php?myid=<?php echo $row['id'] ?>" onclick="return Del()"><img src="images/delete.png" alt="" srcset=""  style='width:100%;height:30px;object-fit:contain; margin:5px;'></a>
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

<script>
function Del(){
return confirm('Do You Really Want To Delete The Selected Record! ')

}

</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>