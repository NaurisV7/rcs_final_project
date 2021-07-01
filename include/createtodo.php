<?php

include_once "DB.php";
session_start();

if(isset($_POST['todosubmit'])) {
    
    $user_id = $_SESSION['ID'];
    $todo = $_POST['todo'];

    $sql = "INSERT INTO todo (user_id, user_todo) VALUES ('$user_id', '$todo')";

    if(!$conn->query($sql)) {
        echo "error" . $sql . "<br>" . $conn->error;
    } 
}