<?php

session_start();
include 'database.php';

$email=$_SESSION["email"];
$sql = "SELECT * FROM  userlog WHERE email='$email' ";
$result = mysqli_query($conn, $sql);


$logs=[];

if (mysqli_num_rows($result) >0) {
    while($row = mysqli_fetch_assoc($result)) {
        $logs[]=$row;
    }
}
//push the chat in the state and the current username , then use js to check if is empty or 
$state=[];


$state["logs"]=$logs;

echo json_encode($state);


?>