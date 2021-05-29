<?php

  session_start();
  if(isset($_SESSION["user"])){
      header("location:user.php");
  }

  if(isset($_SESSION["admin"])){
      header("location:admins.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/login.css">
</head>

<body>
    <div class="form-container">
        <div class="logo">
            <img src="./Logo.jpeg" width= "100px" height= "50px">
        </div>
        <div class="logo-text">
            Welcome to IcharitAble System
        </div>

        <div class="input-group">
            <a href="./register.php" class="btn">Register Here</a>
        </div>
        <hr>
        <div class="form">
            <div class="input-group">
                <label>Email</label>
                <input type="text"  id="email">
                <label for="" class="error err_email"></label>
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" placeholder="require more than 6 characters" id="password">
                <label for="" class="error err_passowrd"></label>
            </div>
            <div class="input-group">
                <button type="submit" id="submitLogin">Login</button>
            </div>
            <div class="input-group">
                <footer>&copy;2021-IcharitAble app</footer>
            </div>
        </div>
    </div>
    <script src="./script/jquery.js"></script>
    <script src="./script/login.js"></script>

</body>

</html>