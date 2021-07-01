<?php

include_once "login_validator.php";

class LoginValidate
{
    private array $errors = [];

    public function validateLogin () {
        $loginValidate = new LoginValidator($_POST);
        $errors = $loginValidate->validateInput();
        if (!$errors) {

            header("Location: ../final/todo.php");
        } else {
            return $this->errors = $errors;
        }
    }
}