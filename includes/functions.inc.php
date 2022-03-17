<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
    function emptyinputSignup($name, $username, $email, $password, $passwordRepeat){
        $result;
        if (empty($name) || empty($username) || empty($email || empty($password) || empty($passwordRepeat))) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    } 
    function invalidUid($username){
        $result;
        if(!preg_match('/^[a-zA-Z0-9]*$/', $username)){
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
    function pwddontmatch($password,$passwordRepeat){
        $result;
        if ($password != $passwordRepeat) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
    function invalidEmail($email){
        $result;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
    function emptyinputLogin($username,$password){
        $result;
        if(empty($username) || empty($password)){
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
    function createUser($conn,$name, $email, $username, $password){
        $sql = 'INSERT INTO users( userName, userEmail, userUid, userPwd ) VALUES (?,?,?,?);';
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header ('location: ../index.php?error=stmtfailed');
            exit();
        }

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, 'ssss', $name, $email ,$username,$hashedPwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close();
        header ('location: ../login.php?account=created');
        exit();
    }
    function uidExists($conn, $username, $email){
        $sql = 'SELECT * FROM users WHERE userUid = ? OR userEmail = ?;';
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('location: ../login.php?error=stmtfailed');
            exit();
        }
        mysqli_stmt_bind_param($stmt, 'ss', $username, $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        } 
        else {
            $result = false;
            return $result;
        }
        mysqli_stmt_close($stmt);
    }
    function loginUser($conn, $username, $password){
        $uidExists = uidExists($conn, $username, $username);

        if ($uidExists === false) {
            header('location: ../login.php?error=wronglogin');
            exit();
        }
        $hashedPwd = $uidExists['userPwd'];
        $checkPwd = password_verify($password, $hashedPwd);
        
        if($checkPwd === false){
            header('location: ../login.php?error=wronglogin');
            exit();
        } else if($checkPwd === true){
            session_start();
            $_SESSION['userId'] = $uidExists['userId'];
            $_SESSION['userUid'] = $uidExists['userUid'];
            $_SESSION['userName'] = $uidExists['userName'];
            $_SESSION['userEmail'] = $uidExists['userEmail'];
            $_SESSION['userpB'] = $uidExists['image'];
            header('location: ../home.php');
            exit();
        }

    }

?>