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
    <div class="container-fluid bg-dark text-white text-center p-5">
        <h1>Products Deatil</h1>
    </div>
    <?php
    $conn = mysqli_connect('localhost', "root", "", "company");
    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) >  0) {

    ?>

        <table class="table">
            <thead>
                <tr>
                    <th>Products Id</th>
                    <th>Products Name</th>
                    <th>Products Quantity</th>
                    <th>Products Price</th>
                    <th>Products Picture</th>
                </tr>
            </thead>
            <?php

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tbody>
                    <tr>

                        <td><?php echo $row['product_id'] ?></td>
                        <td><?php echo $row['product_name'] ?></td>
                        <td><?php echo $row['product_quantity'] ?></td>
                        <td><?php echo $row['product_price'] ?></td>
                        <td><img src="img/<?php echo $row['product_picture'] ?>" alt="" style='width:100%;height:200px; object-fit:contain'></td>
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