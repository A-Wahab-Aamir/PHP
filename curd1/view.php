<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$myid=$_GET['myid'];
$conn=mysqli_connect('localhost', "root", "", "myaptech");
$sql = "SELECT * FROM students WHERE id= $myid";
$res= mysqli_query($conn, $sql);
if(mysqli_num_rows($res) >  0 ){
while($row=mysqli_fetch_assoc($res)){
?>

<table align="center" border="0">
<tr>
<td><?php echo $row['name'] ?></td>
<td rowspan="5"><img src="images/<?php echo $row['profile_picture'] ?>" alt="" style='width:100%;height:150px;object-fit:contain; margin:5px;'></td>
</tr>

<tr>
<td><?php echo $row['address'] ?></td>
</tr>

<tr>
<td><?php echo $row['class'] ?></td>
</tr>

<tr>
<td><?php echo $row['phone'] ?></td>
</tr>

<tr>
<td><?php echo $row['gender'] ?></td>
</tr>

</table>


<?php 

}}

?>
</body>
</html>

