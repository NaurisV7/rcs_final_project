<?php

include_once "DB.php";
include_once "../final/register.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO register (username, password) VALUES  ('$username', '$password')";

    if ($conn->query($sql)) {
        echo "link to successfull register!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
