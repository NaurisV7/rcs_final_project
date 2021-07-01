<?php


include_once "user_validator.php";
class Validation
{
    
    private array $errors = [];

    public function validateUser () {
        $validation = new UserValidator($_POST);
        $errors = $validation->validateForm();
        if (!$errors) {
            include_once "../final/include/newuser.php";
            header("Refresh:1; index.php");
            exit();
        }
        return $this->errors = $errors;
               
    }

    public function printError () {
            return $this->errors;
    }
}
