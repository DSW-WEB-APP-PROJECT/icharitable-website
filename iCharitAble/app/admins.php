<?php

  session_start();
  if(!isset($_SESSION["admin"])){
      header("location:index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Side</title>
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/user.css">
    <link rel="stylesheet" href="./style/admin.css">
</head>

<body>
    <div class="nav">
            <div class="logo">
                <img src="./Logo.jpeg" width= "100px" height= "50px">
            </div>
            <div class="links">
                <a href="#" class="active">ADMIN</a>
              
                <a href="#" class="btn"  id="logoutBtn">Logout</a>
            </div>
    </div>
    <div class="container" style="width 100%">
        

        <div class="">
            <div class="input-group">
                <label> update password</label>
                <input type="text" id="updateInp">
            </div>
            <div class="input-group">
                <a href="#" class="btn" id="updateBtn">update</a>
            </div>
        </div>

        <div class="admin-table container">
            <table class="table-data"   style="width 100%;overflow:auto">
                
            </table>
        </div>

    </div>
        <script src="./script/jquery.js"></script>
    <script src="./script/adminLogout.js"></script>
    <script src="./script/updateAdmin.js"></script>
    <script src="./script/getAdminTable.js"></script>
</body>

</html>