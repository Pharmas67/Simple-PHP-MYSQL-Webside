<?php 
    require 'header.php';
    require 'includes/functions.inc.php';
?>

    <div class="background">
        <div class="profileBg">
            <form action="includes/chgName.inc.php" method="POST" class="form">
                <p>Type your new Name: </p>
                <input type="text" name="chgName">
                <input type="hidden" value="<?php echo $_SESSION['userId'] ?>">
                <input type="submit" name="submit" value="Update">
            </form>
        </div>
    </div>
<?php
    require 'footer.php';
?>