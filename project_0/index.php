<?php 

$num1 =$_GET['num1']; 
$num2 = $_GET['num2'];
$op=$_GET['operator']; 

switch ($op){
    case "none":
        $ans = "SELECT THE PORPER OPERATOR"; 
        break;
    case "add":
        $ans="YOUR ANSWER IS: ".$num1 + $num2;
        break;
    case "sub":
        $ans="YOUR ANSWER IS: ".$num1 - $num2;
        break;
    case "div":
        $ans="YOUR ANSWER IS: ".$num1 / $num2;
        break;
    case "mul":
        $ans="YOUR ANSWER IS: ".$num1 * $num2;
        break;
     
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <table align="center">
            <tr>
                <th><span><?php echo $ans; ?></span></th>
            </tr>
            <tr>
                <td><input type="text" placeholder="Enter Number 1" name="num1" value='<?php echo $num1 ?>'></td>
            </tr>
            <tr>
                <td><input type="text" placeholder="Enter Number 2" name="num2" value='<?php echo $num2 ?>'></td>
            </tr>
            <tr>
               <td>
               <select name="operator" >
                    <option value="none">Select Operator</option>
                    <option value="add">Addition</option>
                    <option value="sub">Subtract</option>
                    <option value="div">Division</option>
                    <option value="mul">Multiplication</option>
                </select>
               </td>
            </tr>
            <tr>
                <td><input type="submit" value="Calculate"></td>
            </tr>
        </table>
    </form>
</body>
</html>