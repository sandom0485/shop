<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="register.css">
  <title>Document</title>
</head>
<body>
    <?php

      include("connect.php");
      //chek if it is oosted back
      if(isset($_POST['submit'])){
          //รับข้อมูล
          $fistname = $_POST['fistname'];
          $lastname = $_POST['lastname']
          $username = $_POST["username"];
          $email = $_POST['email'];
          $password =md5($conn->real_escape_string($_POST['password']));

          //
          //
          $sqlInsert = "INSERT INTO customers (name, username, email, password, active) VALUES('$name','$username','$email','$password','0')";

          echo $sqlInsert;
      }             
    ?>


  <div id="login-box">
    <div class="left">
      <h1>Sign up</h1>
      <input type="text" name="name" placeholder="Name" />
      <input type="text" name="username" placeholder="Username" />
      <input type="text" name="email" placeholder="E-mail" />
      <input type="password" name="password" placeholder="Password" />
      <input type="password" name="password2" placeholder="Retype password" />
      
      <input type="submit" name="signup_submit" value="Sign me up" />
    </div>
    
    <div class="right">
      <span class="loginwith">Sign in with<br />social network</span>
      
      <button class="social-signin facebook">Log in with facebook</button>
      <button class="social-signin twitter">Log in with Twitter</button>
      <button class="social-signin google">Log in with Google+</button>
    </div>
    <div class="or">OR</div>
  </div>
</body>
</html>