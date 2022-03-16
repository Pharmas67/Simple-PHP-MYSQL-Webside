<?php
    require 'includes/dbh.inc.php';
    require 'includes/functions.inc.php';
    require 'header.php';
    session_start();
    
?>
 <form action="includes/functions.inc.php" method="POST" name="">
        <input type="text" name="id" id="">
        <input type="submit" name="submit" id="">
 </form>

<?php
    if (isset($_POST['submit'])) {
        $username = $_POST['id'];

        print_r(query($conn, $username));
    }


     require 'footer.php';
/* function query($conn, $name, $email, $username, $password){
    session_start();
    $id = $_SESSION['userId'];
    $sql = "SELECT * FROM users WHERE userId=" $id;
    $result = mysqli_query($conn, $sql);
    while ($data = $result->fetch_assoc()) {
        $name = $data['userName'];
        $email = $data['userEmail'];
        $username = $data['userUid'];
    }
} */
?>
