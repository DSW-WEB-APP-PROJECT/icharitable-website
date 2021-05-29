<?php


session_start();
  if(!isset($_SESSION["user"])){
      header("location:index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/chat.css">

</head>
<body>
    <div class="nav">
        <div class="logo">
            <img src="./Logo.jpeg" width= "100px" height= "50px">
        </div>
        <div class="links">
            <a href="./user.php">Donate</a>
            <a href="#" class="active">Chat</a>
            <a href="#" class="btn"  id="logoutBtn">Logout</a>
        </div>
    </div>
  
    <div class="chat">
    <!-- use jquery to push new chats -->
    </div>

    <div class="footerChat">
        <input type="text" class="chat-input" >
        <button type="submit" class="btn chat-button">Send</button>
    </div>


    <script src="./script/jquery.js"></script>
    <script src="./script/userLogout.js"></script>
    <script src="./script/getMessage.js"></script>
    <script src="./script/chat.js"></script>
</body>
</html>