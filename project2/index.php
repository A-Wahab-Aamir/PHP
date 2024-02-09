<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Title</title>
</head>
<body>

<?php
$num1=$_GET['num1'];
$num2=$_GET['num2'];
$even=null;
$odd=null;

if($num1 > $num2){
    echo "<script>alert('Number 1 can not be Greater then Number 2')</script>";
}
else{
    for($i=$num1;$i <= $num2; $i++){
    
    if($i %2 == 0){
        $even.="<ul type='square' style='border:3px solid #016dd9; '><li>".$i."</li></ul>";
    }
    else{
        $odd.="<ul type='square' style='border:3px solid #016dd9; '><li>".$i."</li></ul>";
    }
}
}
?>

<form action="index.php" method="get">
    <table align="center" border="0" cellpadding="20">
    <tr>
        <td><input class="input" type="number" placeholder="Enter the Number 1" name="num1" value=<?php echo $num1 ?>></td>
        <td><input class="input" type="number" placeholder="Enter the Number 2" name="num2" value=<?php echo $num2 ?>></td>
</tr>
<tr>
    <td><button type="submit">Run me</button></td>
</tr>
    <tr>
        <td> <b>Even</b> <br> <?php echo $even ?> </td>
        <td><b>Odd</b> <br> <?php echo $odd ?></td>
    </tr>
</table>
</form>









<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>