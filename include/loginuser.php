<?php
include_once "DB.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!isset($username)) {
        header("Location: You need to enter username!");
        exit();
    } elseif (!isset($password)) {
        header("Location: You need to enter password!");
    } else {
        $sql = "SELECT * FROM register WHERE username='$username' AND password='$password'";

        $result = $conn->query($sql);

        if ($result->num_rows) {
            $row = $result->fetch_assoc();
            session_start();
            $_SESSION['ID'] = $row['ID'];
            header("Location: ../final/todo.php");
        } else {
            echo "something went wrong!";
        }
    }
}