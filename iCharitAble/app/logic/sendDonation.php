<?php
session_start();
include 'database.php';

$things=$_POST["things"];
$province=$_POST["province"];
$phone=$_POST["phone"];
$email=$_SESSION["email"];
$res=[];
$res["done"]="sumitted";

///add in the user log... use the email to fetch the data
$sql = "INSERT INTO userlog (province,things,email) VALUES ('$province','$things','$email')";
mysqli_query($conn, $sql);
echo json_encode($res);
//add in the user table
$sql = "INSERT INTO admin (phone,province,things) VALUES ('$phone','$province','$things')";
mysqli_query($conn, $sql);
echo json_encode($res);
