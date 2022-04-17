<?php
include_once '../models/user.php';
include_once '../repository/userRepository.php';
include_once '../assets/validation.php';
include_once '../database/dbConnection.php';

if(isset($_POST['register'])){
    $conn = new dbConnection;
    $connection = $conn->startConnection();
    $name = $_POST['name'];
    $username = $_POST['username'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id = rand(100,200).$username;

    if(emptyInputSignUp($id,$name,$username,$birthday,$email,$password) !== false){
        header("Location: login.php?error=emptyInput");
        exit();
    }
    if(imvalidUid($username) !== false){
        header("Location: login.php?error=invalidUsername");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("Location: login.php?error=invalidEmail");
        exit();
    }
    if(invalidPassword($password) !== false){
        header("Location: login.php?error=invalidPassword");
        exit();
    }
    if(emailExists($connection, $email) !== false){
        header("Location: login.php?error=emailTaken");
        exit();
    }
    if(usernameExists($connection, $username) !== false){
        header("Location: login.php?error=usernameTaken");
        exit();
    }
    if(empty($_POST['name']) || empty($_POST['username']) || empty($_POST['birthday']) || 
    empty($_POST['email']) || empty($_POST['password'])){
        header("Location: login.php?error=emptyInput");
    }else{
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        $user = new User($id,$name,$username,$birthday,$email,$hashPassword);
        $userRepository = new UserRepository();
        $userRepository->insertUser($user);
    }
}

