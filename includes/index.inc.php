<?php

    if (isset($_POST['submit-signup'])) {
        $name = $_POST['name'];
        $username = $_POST['uid'];
        $email = $_POST['mail'];
        $password = $_POST['pwd'];
        $passwordRepeat = $_POST['repeatpwd'];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if(pwddontmatch($password, $passwordRepeat) !== false){
            header('location: ../index.php?error=pwddontmatch');
            exit();
        }
        if(emptyinputSignup($name, $username, $email, $password, $passwordRepeat) !== false){
            header('location: ../index.php?error=emptyinputSignup');
            exit();
        }
        if(invalidUid($username) !== false){
            header('location: ../index.php?error=invalidUid');
            exit();
        }
        if(invalidEmail($email) !== false){
            header('location: ../index.php?error=invalidEmail');
            exit();
        }

        createUser($conn,$name,$email,$username,$password);
    }

?>