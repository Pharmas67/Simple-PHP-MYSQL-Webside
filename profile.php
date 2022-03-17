<?php
    require 'header.php';
    require 'includes/functions.inc.php';
?>
<main>
    <div class="background">
        <div class="profileBg">
            <div class="line">
                <div class="profile-info" style="border-bottom: #000 solid 1px;">
                    <p>Name:</p>
                </div>  
                <div class="profile-info" style="border-bottom: #000 solid 1px;">  
                    <?php if (isset($_SESSION['userName'])) {
                        echo '<p>'. $_SESSION['userName']. '</p>';
                    }
                    ?>
                </div>
                <a href ="chgName.php" class="chgProfile-a">Update</a>
            </div>
            <div class="line">
                <div class="profile-info" style="border-bottom: #000 solid 1px;">
                    <p>Username:</p>
                </div>
                <div class="profile-info" style="border-bottom: #000 solid 1px;">
                    <?php if (isset($_SESSION['userUid'])) {
                        echo '<p>'. $_SESSION['userUid']. '</p>';
                    }
                    ?>
                </div>
                <a href ="chgUsrName.php" class="chgProfile-a">Update</a>            
            </div>
            <div class="line">
                <div class="profile-info">
                    <p>Email:</p>
                </div>
                <div class="profile-info">
                    <?php if (isset($_SESSION['userEmail'])) {
                        echo '<p>'. $_SESSION['userEmail']. '</p>';
                    }
                    ?>
                </div> 
                <a href ="chgEmail.php" class="chgProfile-a">Update</a>    
            </div>    
        </div>
    </div>
</main>
<?php
    require 'footer.php';
?>