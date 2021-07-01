<?php

include_once "DB.php";

if (isset($_POST['submit'])) {
    
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO register (username, password) VALUES  ('$username', '$password')";
    
    global $conn;
    if ($conn->query($sql)) {
        return "successfull!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }



}
