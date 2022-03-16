<?php
session_start();

    if (isset($_POST['submit'])) {
        require 'dbh.inc.php';
        $id = $_SESSION['userId'];
        $email = $_POST['chgEmail'];
        if(mysqli_query($conn, "UPDATE `users` SET `userEmail`='". $email."' WHERE userId=". $id)){
            echo 'Record Updated Successfully !';
            header('location: ../profile.php? Successfully updated !');
            unset($_SESSION['userEmail']);
            $_SESSION['userEmail'] = $email;

            exit();
        }
        else {
            echo 'Failed To Update The Record !';
            header('Location: ../profile.php? Failed to Update !');
            exit();
        }
    }
?>