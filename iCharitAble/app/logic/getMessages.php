<?php

session_start();
include 'database.php';

$sql = "SELECT * FROM  chat";
$result = mysqli_query($conn, $sql);


$chats=[];

if (mysqli_num_rows($result) >0) {
    while($row = mysqli_fetch_assoc($result)) {
        $chats[]=$row;
    }
}
//push the chat in the state and the current username , then use js to check if is empty or 
$state=[];

$state["username"]=$_SESSION["user"];
$state["chats"]=$chats;

echo json_encode($state);


?>