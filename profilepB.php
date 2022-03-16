<?php
    require 'header.php';
    require 'includes/dbh.inc.php';
    require 'includes/functions.inc.php';
?>
    <div class="background">   
        <div class="profile-img">
            <?php 
                $id = $_SESSION['userId'];
                $result = mysqli_query($conn,"SELECT * FROM users WHERE userId=".$id);

                while ($data = $result->fetch_assoc()) {
                    echo "<img src='/includes/uploads/".$data['image']."' style='width: 400px; height: 400px; border-radius: 100%;'>";
                } 
            ?>
        
            <form action="includes/profilepB.inc.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="file">
                <button type="submit" name="submit">UPLOAD</button>
            </form>
        </div>
    </div>
<?php
    require 'footer.php';
?>