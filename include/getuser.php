<?php
include_once "DB.php";
//include_once "../register.php";

function getUser () {
    $username = $_POST['username'];
    $sql = "SELECT username FROM register WHERE username='$username'";
    global $conn;
    $result = $conn->query($sql);

    if ($result->num_rows) {
        $row = $result->fetch_assoc();
        return true;

    } else {
        return false;
    }

}


