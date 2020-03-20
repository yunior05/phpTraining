<?php

// Protected class is only accessible throw the class and inheretance classes
// Public is accessible for all
// Private is only accessible throw the main class

class User {
    public $username = '';
    public $password = '';
    protected $email = 'somethin@gmail.com';
    public $friends = array();

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function add_new_friend(int $friendId){
        array_push($this->array, $friendId);
    }
}

class Admin extends User {
    public $level = "";
}