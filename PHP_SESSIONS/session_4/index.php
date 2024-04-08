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

    <?php

    $number1 = $_GET['n1'];
    $number2 = $_GET['n2'];
    $opt = $_GET['operator'];

    switch ($opt) {
        case "add":
            $res = $number1 + $number2;
            break;
        case "sub":
            $res = $number1 - $number2;
            break;
        case "mul":
            $res = $number1 * $number2;
            break;
        case "div":
            $res = $number1 / $number2;
            break;
        case "none":
            $res="Select Proper Opearator!";
            break;
    }


    ?>
    <center>
        <div class="container">
            <form action="index.php" method="get">
                <table class='table'>
                    <tr>
                        <td><input type="number" name="n1" placeholder="Enter Number 1" class='form-control' value='<?php echo $number1 ?>'></td>
                    </tr>
                    <tr>
                        <td><input type="number" name="n2" placeholder="Enter Number 2" class='form-control' value='<?php echo $number2 ?>'></td>
                    </tr>
                    <tr>
                        <td>
                            <select name="operator" class='form-control'>
                                <option value="none">select Operator</option>
                                <option value="add">Add</option>
                                <option value="sub">Sub</option>
                                <option value="mul">Mul</option>
                                <option value="div">div</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Calculate" class='btn btn-danger btn-lg'></td>
                    </tr>
                    <tr>
                        <td>
                            <p class='p-3 m-3 text-center text-danger lead fw-bold fs-4'><?php echo $res;  ?></p>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </center>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>