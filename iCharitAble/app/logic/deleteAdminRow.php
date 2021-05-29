<?php

session_start();
include 'database.php';

$id=$_POST["id"];
$email=$_SESSION["email"];

$sql = "DELETE FROM admin WHERE id=$id";
mysqli_query($conn, $sql);


$status=[];
$status["pass"]="deleted";
echo json_encode($status);