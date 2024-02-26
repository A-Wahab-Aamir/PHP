# SCOPE OF VARIABLE

1) LOCAL VARAIBLE
2) GLOABAL VARAIBLE
3) STATIC VARIABLE

> LOCAL
```
<?php 
// declaring variable
$num2= 0;
function mul(){
    // Local var (scope inside the function)
    $num1=4;
    $num2=5;
    $num2=$num1 + $num2; 
    echo "Inside Function: ".$num2;
}
mul();
echo "<br>Outside Function: ".$num2; 
?>
 ```
> [!NOTE]
> OUTPUT
> ![image](https://github.com/A-Wahab-Aamir/PHP/assets/83786802/691619b5-c460-47eb-bd25-346e3fc07825)

> GLOBAL
```
<?php 
// declaring variable
$num1=14;
$num2=15;
function mul(){
    // declaring global varaible
   global $num1, $num2;
    $num2=$num1 * $num2; 
    echo "Inside function: ".$num2;
}
// funct call
mul();
echo "<br>Outside Function: ".$num2; 
?>
```
> [!NOTE]
> OUTPUT
> ![image](https://github.com/A-Wahab-Aamir/PHP/assets/83786802/2507cfac-fae7-44cc-8a93-10d6aacf8fde)


> STATIC
```
<?php 
// declaring variable
$num1;
function sum(){
    // static var (scope inside the function)
    static $num1=4;
    $num2=$num1 + 2;
    echo "Inside Function: ".$num2;
}
sum();
echo "<br>Outside Function: ".$num2; 
?>
```
> [!NOTE]
> OUTPUT
> ![image](https://github.com/A-Wahab-Aamir/PHP/assets/83786802/dabd2c7d-0853-4af4-b7c0-aa942dd173bc)

> HTTP ENVIRONMENTAL VARIABLES
```
<?php 
echo "Server Software: ".$_SERVER['SERVER_SOFTWARE'].'<br>';
echo "Server Name: ".$_SERVER['SERVER_NAME'].'<br>';
echo "Server Protocol: ".$_SERVER['SERVER_PROTOCOL'].'<br>';
echo "Server Port: ".$_SERVER['SERVER_PORT'].'<br>';
?>
```
> [!NOTE]
> OUTPUT
> ![image](https://github.com/A-Wahab-Aamir/PHP/assets/83786802/5d578bb4-1a5f-4c68-aab4-5c33fd3395a7)





















# PROJECT 2
![image](https://github.com/A-Wahab-Aamir/PHP/assets/83786802/8f0ecff4-04c6-45e8-8301-a0b278fcf1ba)

# PROJECT 4
![image](https://github.com/A-Wahab-Aamir/PHP/assets/83786802/b2363af7-c6dc-404d-af14-6f3e866013f4)


## youtube Introduction to PHP
https://www.youtube.com/watch?v=qyQQlwwzyA8

## youtube Basic Calculator
https://www.youtube.com/watch?v=K3_-ZX_rmrM
