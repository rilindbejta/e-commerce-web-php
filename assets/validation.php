<?php
include_once '../repository/userRepository.php';

function emptyInputSignUp($name,$username,$birthday,$email,$password){
    $result;
    if(empty($name) || empty($username) || empty($birthday) || empty($email) || empty($password)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function imvalidUid($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidPassword($password){
    $result;
    //1 uppercase , length > 8, 1 special character
    $passwordReg = "/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/";
    if(!preg_match($passwordReg, $password)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function usernameExists($connection, $username){
    $result;
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $query = $connection->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
    if(count($result) > 0){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function emailExists($connection, $email){
    $result;
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $query = $connection->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
    if(count($result) > 0){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($connection, $email, $password){
    $result;
    $emailExists = emailExists($connection, $email);

    if($emailExists === false){
        header("Location: ../view/login.php?error=emailNotFound");
        exit();
    }

    $repository = new UserRepository();
    $user = $repository->getUserByEmail($email);
    $hashPwd = $user['password'];

    $checkPwd = password_verify($password, $user['password']);
    
    if($checkPwd === false){
        header("Location: ../view/login.php?error=wrongPassword");
        exit();
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION["userId"] = $user["id"];
        $_SESSION["role"] = $user["admin"];
        header("Location: ../view/index.php");
        exit();
    }
}
