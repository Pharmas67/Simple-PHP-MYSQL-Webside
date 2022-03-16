<?php 
    require 'header.php';
    require 'includes/functions.inc.php';
?>

    <div class="background">
        <div class="profileBg">
            <form action="includes/chgEmail.inc.php" method="POST" class="form">
                <p>Type your new Email: </p>
                <input type="text" name="chgEmail">
                <input type="hidden" value="<?php echo $_SESSION['userId'] ?>">
                <input type="submit" name="submit" value="Update">
            </form>
        </div>
    </div>
<?php
    require 'footer.php';
?>