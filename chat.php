<?php
    require 'includes/dbh.inc.php';
    require 'header.php';
   
    $sql = 'CREATE TABLE IF NOT EXISTS `chat`(`chatId` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENTS, `chat_room_id` int(11) DEFAULT NULL, `chat_msg` text, `userId` int(11) DEFAULT NULL) ENGINE = InnoDB DEFAULT CHARSET=latin1;';
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($conn,$sql)) {
        header('location: ./chat.php?stmt=error');
        exit();
    }
?>
    <div class="chat-area">
        <?php 
            $id = $_SESSION['userId'];
            $result = mysqli_query($conn,"SELECT * FROM `users` WHERE userId =".$id);
            
        ?>
        <img src="includes/uploads/" alt="">
    </div>




<?php
    require 'footer.php';
?>