<?php 

$n1 = $_GET['num1'];  // start

$n2 = $_GET['num2'];  // end

$even = null; 
$odd = null; 


for($i= $n1 ; $i <= $n2 ; $i = $i +1 ){

if ($i % 2 == 0 ){
    $even .= $i."<br>" ;
}
else{
$odd .= $i."<br>" ;
}
}




?>


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

    <div class="container">
<form action="index.php" method="get">

        <table class="table">
            <tr>
                <td><input type="text" placeholder="Enter Number 1" name="num1" value=<?php echo $n1 ?> ></td>
                <td>&</td>
                <td><input type="text" placeholder="Enter Number 2" name="num2" value=<?php echo $n2 ?> ></td>

            </tr>
            <tr>
                <td>
                    <input type="submit" value="Genearte" class="btn btn-dark btn-lg">
                </td>

            </tr>
            <tr>

                <td>EVEN <br>

<?php echo $even ?>

</td>
                <td>ODD <br>

<?php echo $odd ?>

</td>
            </tr>

        </table>

</form>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>