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
            Sign Up Form
         </div>
         <form method="post">
            <input type="text" placeholder="Full Name" name='fullname'> 
            <input type="text" placeholder="Email Address" name='email'>   
            <input type="text" placeholder="Username" name='username'>
            <input id="pswrd" type="password" placeholder="Password" name='password'>
            <i class="fas fa-lock" onclick="show()"></i>
            <input type="submit" value="Sign Up" name='btnregistor'>
            <a href="login.php">Already A User</a>
         </form>
      </div>

      <?php     
      if(isset($_POST['btnregistor'])){
         $fullname=$_POST['fullname']; 
         $email=$_POST['email'];
         $username=$_POST['username'];
         $pass= $_POST['password'];
         include('config.php');
         $sql ="INSERT INTO `user`(`fullname`, `email`, `username`, `password`) VALUES ('$fullname','$email','$username','$pass')";
         $res=mysqli_query($conn, $sql);

         if($res){
            echo "<script>alert('Registored Successfully!')</script>";
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