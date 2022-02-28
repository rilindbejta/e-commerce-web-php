<?php
    include_once '../repository/userRepository.php';
    include_once '../models/user.php';

    function checkEmpty(){
        if(isset($_POST['register'])){
            if(empty($_POST['name']) || empty($_POST['username']) 
            || empty($_POST['birthday']) || empty($_POST['email'])
            || empty($_POST['password'])){
                echo "Please fill all the fields!";
            }
            else{
                $name = $_POST['name'];
                $username = $_POST['username'];
                $birthday = $_POST['birthday'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                
                $user = new User($name,$username,$birthday,$email,$password);
                $userRepository = new UserRepository();
                $userRepository->insertUser($user);
            }
        }
    }
    checkEmpty();

?>