<?php
require_once '../database/dbConnection.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new dbConnection;
        $this->connection = $conn->startConnection();
    }

    function insertUser($user){
        $conn = $this->connection;

        $id = $user->getId();
        $name = $user->getName();
        $username = $user->getUsername();
        $birthday = $user->getBirthday();
        $email = $user->getEmail();
        $password = $user->getPassword();

        $sql = "INSERT INTO users (id,name,username,birthday,email,password) VALUES (?,?,?,?,?,?)";
        
        $statement = $conn->prepare($sql);
        $statement->execute([$id,$name,$username,$birthday,$email,$password]);
        echo "<script> alert('User has been inserted successfuly!') </script>";
    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM users";
        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserByUsernameAndPassword($email,$password){
        $conn = $this->connection;

        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $statement = $conn->query($sql);
        $user = $statement->fetch();
    
        return $user;
    }

    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM users WHERE id='$id'";
        $statement=$conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }
    function getUserByEmail($email){ 
        $conn = $this->connection;

        $sql = "SELECT * FROM users WHERE email='$email'";
        $statement=$conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateUser($id, $name,$username,$birthday,$email,$password){
        $conn = $this->connection;

        $sql = "UPDATE users SET name=?,username=?,birthday=?,email=?,password=? where id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$name,$username,$birthday,$email,$password, $id]);

        echo "<script> alert('User has been updated successfuly!') </script>";


    }

    function deleteUserById($id){
        $conn = $this->connection;

        $sql = "DELETE FROM users WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        echo "<script> alert('User has been deleted successfuly!') </script>";
    }
}