<?php 
session_start();

?>


<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Login Form</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
   </head>
   <body>
      <div class="center">
         <div class="header">
            Login Form
         </div>
         <form method="post">
            <input type="text" placeholder="Email or Username" name='username'>
            <input id="pswrd" type="password" placeholder="Password" name='password'>
            <i class="fas fa-lock" onclick="show()"></i>
            <input type="submit" value="Log In" name='btnlogin'>
            <a href="signup.php">Registor Yourself</a>
         </form>
      </div>

      <?php     
      if(isset($_POST['btnlogin'])){
         $username=$_POST['username'];
         $pass= $_POST['password'];
         include('config.php');
         $sql ="SELECT * FROM user where username='$username' and password='$pass'; ";
         $res=mysqli_query($conn, $sql);

         if(mysqli_num_rows($res)){
            header('location:index.php');
            $_SESSION['myusername']=$username;
           
         }
         else{
            echo "<script>alert('Username and Password Not Correct!')</script>";
         }
      }
?>







      <script>
         function show(){
          var pswrd = document.getElementById('pswrd');
          var icon = document.querySelector('.fas');
          if (pswrd.type === "password") {
           pswrd.type = "text";
           pswrd.style.marginTop = "20px";
           icon.style.color = "#7f2092";
          }else{
           pswrd.type = "password";
           icon.style.color = "grey";
          }
         }
      </script>
   </body>
</html>