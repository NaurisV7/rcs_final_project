<?php

include_once "../final/include/DB.php";
include_once "../final/include/getuser.php";



class UserValidator
{

    private $data;
    private array $errors = [];
    private array $fields = ['username', 'password', 'passwordrepeat'];

    public function __construct (array $post_data) {
        $this->data = $post_data;
    }

    public function validateForm () {
        foreach($this->fields as $field) {
            if (!array_key_exists($field, $this->data)){
                trigget_error("$field is not present in data");
                return;
            }
        }

        $this->validateUsername();
        $this->validatePassword();
        return $this->errors;

    }

    private function validateUsername () {
        $val = trim($this->data['username']);

        if(empty($val)) {
            $this->addError('username', 'Username cannot be empty');
        } else {
            if (!preg_match('/^[a-zA-Z0-9]{6,12}$/', $val)){
                $this->addError('username', 'Username must be 6-12 charcthers and can only hold alphanumeric');
            } else if (getUser()) {
                $this->addError('username', 'Username is taken');
            }
        }
    }

    private function validatePassword () {
        $val = trim($this->data['password']);
        $repval = trim($this->data['passwordrepeat']);

        if (empty($val)) {
            $this->addError('password', 'You need to enter password'); 
        } else {
            if (!($val === $repval)) {
                $this->addError('password', 'Passwords must match');
            } else {
                if (!preg_match('/^[a-zA-Z0-9]{6,12}$/', $val)){
                    $this->addError('password', 'Password must be 6-12 charcthers and can only hold alphanumeric');
                }
            }
        }

        


    }

    private function addError ($key, $val) {
        $this->errors[$key] = $val;

    }
   
}