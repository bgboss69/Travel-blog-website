<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name =  $_POST['name'];
   $email = $_POST['email'];
   $pass = $_POST['pass'];
   $cpass = $_POST['cpassword'];
   $user_id = random_num(10);
   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form (user_id, name, email, password) VALUES ('$user_id', '$name', '$email', '$pass')";
         if (!mysqli_query($conn, $insert)) {
            echo "Error creating table : " . mysqli_error($conn);
        }else{
         header('location:login_form.php');

        }
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./asset/css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h1>Korea Travel Blog</h1>
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="pass" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>

</body>
</html>