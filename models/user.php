<?php
    class User{
        private $id;
        private $name;
        private $username;
        private $birthday;
        private $email;
        private $password;

        function __construct($id ,$name, $username, $birthday,$email, $password)
        {
            $this->id = $id;
            $this->name = $name;
            $this->username = $username;
            $this->birthday = $birthday;
            $this->email = $email;
            $this->password = $password;
        }

        //set session 
        public function setSession(){
            $_SESSION['admin'] = 0;
            $_SESSION['rolename'] = "SimpleUser";
            $_SESSION['is_logged_in'] = true;
            $_SESSION['email'] = $this->email;
        }

        //getters
        function getID(){
            return $this->id;
        }
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