<?php

session_start();
include 'database.php';

$sql = "SELECT * FROM  admin";
$result = mysqli_query($conn, $sql);


$admin=[];

if (mysqli_num_rows($result) >0) {
    while($row = mysqli_fetch_assoc($result)) {
        $admin[]=$row;
    }
}
//push the chat in the state and the current username , then use js to check if is empty or 
$state=[];


$state["admin"]=$admin;
echo json_encode($state);


?>