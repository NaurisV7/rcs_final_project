<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final";

// create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// check connection 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connection_error);
}
