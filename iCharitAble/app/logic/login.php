<?php

include 'database.php';

$email=$_POST["email"];
$password=$_POST["password"];

$sql = "SELECT * FROM  user WHERE  email='$email'  AND pass='$password' LIMIT 1";
$result = mysqli_query($conn, $sql);


$res=[];
$status=[];
if (mysqli_num_rows($result) !=1) {
   $status["fail"]="invalid password or email";
   
   echo json_encode($status);
   exit;
} 

while($row = mysqli_fetch_assoc($result)) {
    $res[]=$row;
}


session_start();



//to keep track of the userlog
$_SESSION["email"]=$email;

if($res[0]["type"]=="admin"){
    unset($_SESSION["user"]);
    //set session == email
    $_SESSION["admin"]=$email;

    $status["type"]="admin";
    echo json_encode($status);
}else{
    unset($_SESSION["admin"]);
    //set session == username from the db
    $_SESSION["user"]=$res[0]['username'];

    ///user
    $status["type"]="user";
    echo json_encode($status);
}



?>