<?php 
    require 'header.php';
    require 'includes/functions.inc.php';
?>

    <div class="background">
        <div class="profileBg">
            <form action="includes/chgUsrName.inc.php" method="POST" class="form">
                <p>Type your new Username: </p>
                <input type="text" name="chgUsrName">
                <input type="hidden" value="<?php echo $_SESSION['userId'] ?>">
                <input type="submit" name="submit" value="Update">
            </form>
        </div>
    </div>
<?php
    require 'footer.php';
?>