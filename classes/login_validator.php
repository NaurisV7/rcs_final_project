<?php

include_once "../final/include/DB.php";

// if (isset($_POST['submit'])) {
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     if (!isset($username)) {
//         header("Location: You need to enter username!");
//         exit();
//     } elseif (!isset($password)) {
//         header("Location: You need to enter password!");
//     } else {
//         $sql = "SELECT * FROM register WHERE username='$username' AND password='$password'";

//         $result = $conn->query($sql);

//         if ($result->num_rows) {
//             $row = $result->fetch_assoc();
//             session_start();
//             $_SESSION['ID'] = $row['ID'];
//             header("Location: ../final/todo.php");
//         } else {
//             echo "something went wrong!";
//         }
//     }
// }



class LoginValidator
{
    private string $username;
    private string $password;
    private array $errors = [];

    public function __construct (array $post_data){
        $this->username = $post_data['username'];
        $this->password = $post_data['password'];
    }

    public function validateInput () {
        $this->input();
        return $this->errors;
    }

    public function input () {
        if (!isset($this->username)) {
            $this->addError("username", "You must enter username");
        } elseif (!isset($this->password)) {
            $this->addError("password", "You must enter password");
        } else {
            $sql = "SELECT * FROM register WHERE username='$this->username'";
            global $conn;
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $dbHash = $row['password'];

            if (password_verify($this->password, $dbHash)){
                session_start();
                $_SESSION['ID'] = $row['ID'];
                header("Location: ../final/todo.php");
            } else {
                $this->addError("username", "Username or password doesn`t exists");
            }
        }
    }    

    public function addError ($key, $value) {
        $this->errors[$key] = $value;
    }

}