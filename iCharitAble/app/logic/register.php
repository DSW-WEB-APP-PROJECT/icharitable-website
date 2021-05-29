<?php

session_start();
include 'database.php';

$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];

$sql = "SELECT * FROM  user WHERE  email='$email'";
$result = mysqli_query($conn, $sql);


// echo " ".$email."   ".$username."   ".$password;

$res=[];
$status=[];
if (mysqli_num_rows($result) ===1) {
   $status["fail"]="you have an account login ";
   
   echo json_encode($status);
   exit;
} 

$sql = "INSERT INTO user (email,username,pass,type) VALUES ('$email','$username','$password','user')";
mysqli_query($conn, $sql);

//set session == email
$_SESSION["user"]=$username;

//to keep track of the userlog
$_SESSION["email"]=$email;

$status["pass"]="welcome";
echo json_encode($status);

?>