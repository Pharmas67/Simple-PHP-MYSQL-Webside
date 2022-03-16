<?php
    if (isset($_POST['submit-login'])) {
        $username = $_POST['uid'];
        $password = $_POST['pwd'];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if (emptyinputLogin($username,$password) !== false ){
            header('location: ../login.php?error=emptyinput');
            exit();
        }
            
        loginUser($conn, $username, $password);
    } else{
        header('location: ../login.php?');
        exit();
    }

?>