<?php   
    require 'header.php';
?>
    <div class="home-background">

        <div class="home-title">
            <p>Welcome</p>
            <?php
                if(isset($_SESSION['userName'])){ 
                    echo '<p style="display: flex; padding-left: 20px; justify-content: flex-start;">' .$_SESSION['userName']. '</p>';
                }
            ?>       
        </div>
        
    </div>
<?php
    require 'footer.php';
?>
