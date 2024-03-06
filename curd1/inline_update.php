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

<form action="edit.php" method="get">

<table align="center">
<tr>
<td><input type="text" value="<?php echo $row['id'] ?>"      name='id'></td>
<td rowspan="5"><img src="images/<?php echo $row['profile_picture'] ?>" alt="" style='width:100%;height:150px;object-fit:contain; margin:5px;'></td>

</tr>

<tr>
<td><input type="text" value='<?php echo $row['name'] ?>'     name='name'></td>
</tr>

<tr>
<td><input type="text" value='<?php echo $row['address'] ?>'     name='address'></td>
</tr>

<tr>
<td><input type="text" value='<?php echo $row['class'] ?>'     name='class'></td>
</tr>

<tr>
<td><input type="text" value='<?php echo $row['phone'] ?>'     name='phone'></td>
</tr>

<tr>
<td><input type="text" value='<?php echo $row['gender'] ?>'     name='gender'></td>
</tr>

<tr>
<td><input type="submit" value="Update"></td>
</tr>
</table>

</form>
<?php 


}}

?>
</body>
</html>