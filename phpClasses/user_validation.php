<?php 

class FormValidation {
    private $data;
    private $errors = [];
    private static $fields = ['username', 'password'];

    public function __construct($data)
    {
        $this->data = $data;
    }
    
    public function validateForm(){
        foreach (self::$fields as $field) {
            if(!array_key_exists($field, $this->data)){
                trigger_error("$field is not presented in the data");
            }
        }

        $this->validateUsername();
        $this->validatePassword();

        return $this->errors;
    }

    private function validateUsername() {
        $val = trim($this->data['username']);
        if(empty($val)) {
            $this->addError('username', 'The username cant\'t be empty');
        } else {
            if(!preg_match("/^[a-zA-Z0-9]{6,12}$/", $val)) {
                $this->addError('username', 'The username should have 6-12 chars and be alphanumeric');
            }
        }

        return $this->errors;
    }

    private function validatePassword() {
        $val = trim($this->data['password']);
        if(empty($val)) {
            $this->addError('password', 'The passowrd cant\'t be empty');
        } else {
            if(!preg_match("/^[a-zA-Z0-9]{6,12}$/", $val)) {
                $this->addError('password', 'The password should have 6-12 chars and be alphanumeric');
            }
        }

        return $this->errors;
    }

    private function addError($key, $value){
        $this->errors[$key] = $value;
    }
}