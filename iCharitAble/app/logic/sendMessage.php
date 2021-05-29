<?php

session_start();
include 'database.php';

$message=$_POST["message"];
$username=$_SESSION["user"];

$sql = "INSERT INTO chat (message,username) VALUES ('$message','$username')";

$status=[];
//if fail to insert
if (!mysqli_query($conn, $sql)) {
    $status["fail"]="sorry we have a technical error ";
    echo json_encode($status);
    exit;
} 

$status["pass"]="message sent";
echo json_encode($status);

?>