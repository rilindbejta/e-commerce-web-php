<?php
    include_once '../models/user.php';
    include_once '../database/dbConnection.php';

    class UserRepository{
        private $connection;

        function __construct()
        {
            $conn = new DBConnection;
            $this->connection = $conn->startConnection();
        }

        function insertUser($user){
            $conn = $this->connection;

            $name = $user->getName();
            $username = $user->getUsername();
            $birthday = $user->getBirthday();
            $email = $user->getEmail();
            $password = $user->getPassword();
            
            $sql = "INSERT INTO users(name,username,birthday,email,password) values(?,?,?,?,?);";
            $statement = $conn->prepare($sql);
            $statement->execute([$name,$username,$birthday,$email,$password]);
        }


        // function getUserByUsername($username){
            
        // }
    }
?>