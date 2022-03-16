<?php
session_start();

    if (isset($_POST['submit'])) {
        require 'dbh.inc.php';
        $id = $_SESSION['userId'];
        $email = $_POST['chgUsrName'];
        if(mysqli_query($conn, "UPDATE `users` SET `userUid`='". $email."' WHERE userId=". $id)){
            echo 'Record Updated Successfully !';
            header('location: ../profile.php? Successfully updated !');
            exit();
        }
        else {
            echo 'Failed To Update The Record !';
            header('Location: ../profile.php? Failed to Update !');
            exit();
        }
    }
?>