<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form method="post">
            <input type="text" placeholder="Enter Id" name="t1"><br>
            <input type="text" placeholder="Enter name" name="t2"><br>
            <input type="text" placeholder="Enter age" name="t3"><br>
            <input type="submit" value="Save Records" name="save">
        </form>
    </center>

    <?php 

if(isset($_POST['save'])){
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
    $t3=$_POST['t3'];

    $res= $db->create($t2,$t3);
    if($res){
        header("location:index.php");
    }
    else{
        echo "failded to save!";
    }

}
    


?>
</body>
</html>