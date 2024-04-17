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



<?php 

$sub_1=$_GET['s1'];
$sub_2=$_GET['s2'];
$sub_3=$_GET['s3'];

$num_1=$_GET['n1'];
$num_2=$_GET['n2'];
$num_3=$_GET['n3'];

$obt=$num_1+$num_2+$num_3;
$avg=$obt/300;
$per=$avg*100;

if($per<=100 && $per>=90){
    $grade="A One";
}
else if($per<=90 && $per>=80){
    $grade="A +";
}
else if($per<=80 && $per>=70){
    $grade="A";
}
else if($per<=70 && $per>=60){
    $grade="B";
}
else if($per<=60 && $per>=50){
    $grade="C";
}
else{
    $grade="Fail";
}

?>
    <center>
      <form action="index.php" method="get">
      <table>
            <tr>
                <td><input type="text" placeholder="Enter Subject Name" class="form-control m-2" name='s1'></td>
                <td><input type="text" placeholder="Enter Subject Number" class="form-control m-2" name='n1'></td>
            </tr>
            <tr>
                <td><input type="text" placeholder="Enter Subject Name" class="form-control m-2" name='s2'></td>
                <td><input type="text" placeholder="Enter Subject Number" class="form-control m-2" name='n2'></td>
            </tr>
            <tr>
                <td><input type="text" placeholder="Enter Subject Name" class="form-control m-2" name='s3'></td>
                <td><input type="text" placeholder="Enter Subject Number" class="form-control m-2" name='n3'></td>
            </tr>
            <tr>
                <td><input type="submit" value="Show Result" class='btn btn-dark'></td>
            </tr>
        </table>
      </form>
    </center>

    <center>
        <table class='table m-3 table-dark'>
            <tr>
                <td><p><?php echo $sub_1?></p></td>
                <td><p><?php echo $num_1?></p></td>
            </tr>
            <tr>
                <td><p><?php echo $sub_2?></p></td>
                <td><p><?php echo $num_2?></p></td>
            </tr>
            <tr>
                <td><p><?php echo $sub_3?></p></td>
                <td><p><?php echo $num_3?></p></td>
            </tr>
            <tr>
                <td align='right' colspan="2"><p><?php echo $per?></p></td>
            </tr>
            <tr>
                <td align='right' colspan="2"><p><?php echo $grade?></p></td>
            </tr>
        </table>
    </center>
</body>
</html>