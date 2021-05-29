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
    <title>User Side</title>
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/user.css">
</head>

<body>

    <div class="nav">
        <div class="logo">
            <img src="./Logo.jpeg" width= "100px" height= "50px">
        </div>
        <div class="links">
            <a href="#" class="active">Donate</a>
            <a href="./chat.php">Chat</a>
            <a href="#" class="btn" id="logoutBtn">Logout</a>
        </div>
    </div>

    <div class="container">
        

        <div class="donation-grid">
            <div class="donation-log-container">
                
            <!-- add the log with jquery -->

            </div>

            <div class="donate">
                <div class="donateHeader">
                    Donate Here...
                </div>
                <label>Select A Province</label>
                <select name="" id="province">
                    <option value="">Select Province</option>
                    <option value="Gauteng">Gauteng</option>
                    <option value="Limpopo">Limpopo</option>
                    <option value="Mpumalanga">Mpumalanga</option>
                    <option value="North West">North West</option>
                    <option value="Northern Cape">Northern Cape</option>
                    <option value="Western Cape">Western Cape</option>
                    <option value="Free State">Free State</option>
                    <option value="KwaZulu Natal">KwaZulu Natal</option>
                    <option value="Eastern Cape">Eastern Cape</option>
                </select>
                <div class="input-group">
                    <label>Things To Donate</label>
                    <input type="text"   id="things">
                </div>

                <div class="input-group">
                    <label>Phone Number</label>
                    <input type="text"   id="phone">
                </div>
                <div class="input-group">
                    <a href="#" class="btn" id="donateButton">Submit</a>
                </div>

            </div>

        </div>

        <script src="./script/jquery.js"></script>
    <script src="./script/userLogout.js"></script>
    <script src="./script/sendDonation.js"></script>
    <script src="./script/getUserLogs.js"></script>
</body>

</html>