<?php
    class User{
        private $name;
        private $username;
        private $birthday;
        private $email;
        private $password;

        function __construct($name, $username, $birthday,$email, $password)
        {
            $this->name = $name;
            $this->username = $username;
            $this->birthday = $birthday;
            $this->email = $email;
            $this->password = $password;
        }

        //getters
        function getName(){
            return $this->name;
        }
        function getUsername(){
            return $this->username;
        }
        function getEmail(){
            return $this->email;
        }
        function getBirthday(){
            return $this->birthday;
        }
        function getPassword(){
            return $this->password;
        }
    }
?>