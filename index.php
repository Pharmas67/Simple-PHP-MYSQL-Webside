<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible">
        <title>Choose a name</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <main class="start">   
            <div class ="form-background">    
                
                <form class="form"action="includes/index.inc.php" method="post">
                    <p class="form-p">Signup</p>
                    <input type="text" name="name" placeholder="Name">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="text" name="mail" placeholder="Emailadress">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="repeatpwd" placeholder="Password Repeat">
                    <input type="submit" name="submit-signup" value="Submit">
                    <?php
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == 'emptyinputSignup'){
                                echo '<p class="error">Please enter all gaps!<p/>';
                            }
                            if($_GET["error"] == 'invalidUid'){
                                echo '<p class="error">Choose a proper Username<p/>';
                            }
                            if($_GET["error"] == 'pwddontmatch'){
                                echo '<p class="error">Your Passwords dont match<p/>';
                            }
                            if($_GET["error"] == 'uidExists'){
                                echo '<p class="error">Username is already taken</p>';
                            }
                        }
                    ?>
                    <br>
                    <p style="font-size: 20px;">Do you have already an account?!</p>
                    <a href="login.php" style="color: blue;text-decoration: underline;">Click here</a>
                </form>
            </div>    
       </main> 
    </body>
</html>