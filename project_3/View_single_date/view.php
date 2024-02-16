<?php 

$stu_id= $_GET['id'];
$conn = mysqli_connect('localhost', "root", "" ,"aptech");
$sql="SELECT * FROM students WHERE id = $stu_id ";
$res = mysqli_query($conn, $sql);
if(mysqli_num_rows($res) > 0 ){
    while($row=mysqli_fetch_assoc($res)){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1 align="center">
        <tr>
            <td><?php  echo $row['id'] ?></td>
            <td rowspan='6'><img src="images/<?php echo $row['profile_picture']   ?>" alt="" style='width:100%;height:100px; object-fit:contain'></td>
        </tr><tr>
            <td><?php  echo $row['name'] ?></td>
        </tr>
        <tr>
            <td><?php  echo $row['address'] ?></td>
        </tr>
        <tr>
            <td><?php echo  $row['class'] ?></td>
        </tr>
        <tr>
            <td><?php echo  $row['gender'] ?></td>
        </tr>
        <tr>
            <td><?php echo  $row['phone'] ?></td>
        </tr>
    </table>
</body>
</html>


<?php 

    }
}

?>