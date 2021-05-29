<?php

session_start();
include 'database.php';

$password=$_POST["password"];
$email=$_SESSION["email"];

$sql = "UPDATE user SET pass='$password' WHERE email='$email'";
mysqli_query($conn, $sql);


$status=[];
$status["pass"]="$email";
echo json_encode($status);