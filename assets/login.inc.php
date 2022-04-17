<?php
include_once '../assets/validation.php';
include_once '../database/dbConnection.php';

if(isset($_POST['login'])){
    $conn = new dbConnection;
    $connection = $conn->startConnection();

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) || empty($password)){
        header("Location: ../view/login.php?error=emptyLoginInput");
        exit();
    }
    loginUser($connection, $email, $password);
}
else {
    header("Location: ../view/login.php?login=success");
    exit();
}