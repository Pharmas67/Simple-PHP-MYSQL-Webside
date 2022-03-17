<?php   
    require 'header.php';
?>
<main>
    <div class="home-background">
        <div class="home-title">
            <p>Welcome</p>
            <?php
                if(isset($_SESSION['userName'])){ 
                    echo '<p style="display: flex; padding-left: 20px; justify-content: flex-start;">' .$_SESSION['userName']. '</p>';
                }
            ?>       
        </div>
        <div class="textfield">
            <div class="main-text">
                <div class="textbox">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus nulla iusto in voluptates corporis quas voluptate inventore incidunt ipsam, tenetur iure nemo quisquam assumenda! Laudantium laboriosam officia doloremque? Enim similique, perferendis sit aspernatur deleniti doloribus neque? Nemo quas excepturi magnam ducimus soluta corrupti quo, ullam quidem fuga sunt autem modi. Mollitia asperiores deserunt aut, aperiam voluptate commodi ducimus maxime aspernatur doloribus harum vel doloremque, saepe nesciunt quasi non iure! Officiis quas repellat, eaque, maiores, quia modi saepe doloribus amet distinctio fuga quos deleniti sit. Laboriosam mollitia eveniet quibusdam quo. Ipsum quisquam mollitia perspiciatis exercitationem eveniet excepturi adipisci esse repudiandae sequi!</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus nulla iusto in voluptates corporis quas voluptate inventore incidunt ipsam, tenetur iure nemo quisquam assumenda! Laudantium laboriosam officia doloremque? Enim similique, perferendis sit aspernatur deleniti doloribus neque? Nemo quas excepturi magnam ducimus soluta corrupti quo, ullam quidem fuga sunt autem modi. Mollitia asperiores deserunt aut, aperiam voluptate commodi ducimus maxime aspernatur doloribus harum vel doloremque, saepe nesciunt quasi non iure! Officiis quas repellat, eaque, maiores, quia modi saepe doloribus amet distinctio fuga quos deleniti sit. Laboriosam mollitia eveniet quibusdam quo. Ipsum quisquam mollitia perspiciatis exercitationem eveniet excepturi adipisci esse repudiandae sequi!</p>
                </div>
                <div class="textbox">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus nulla iusto in voluptates corporis quas voluptate inventore incidunt ipsam, tenetur iure nemo quisquam assumenda! Laudantium laboriosam officia doloremque? Enim similique, perferendis sit aspernatur deleniti doloribus neque? Nemo quas excepturi magnam ducimus soluta corrupti quo, ullam quidem fuga sunt autem modi. Mollitia asperiores deserunt aut, aperiam voluptate commodi ducimus maxime aspernatur doloribus harum vel doloremque, saepe nesciunt quasi non iure! Officiis quas repellat, eaque, maiores, quia modi saepe doloribus amet distinctio fuga quos deleniti sit. Laboriosam mollitia eveniet quibusdam quo. Ipsum quisquam mollitia perspiciatis exercitationem eveniet excepturi adipisci esse repudiandae sequi!</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus nulla iusto in voluptates corporis quas voluptate inventore incidunt ipsam, tenetur iure nemo quisquam assumenda! Laudantium laboriosam officia doloremque? Enim similique, perferendis sit aspernatur deleniti doloribus neque? Nemo quas excepturi magnam ducimus soluta corrupti quo, ullam quidem fuga sunt autem modi. Mollitia asperiores deserunt aut, aperiam voluptate commodi ducimus maxime aspernatur doloribus harum vel doloremque, saepe nesciunt quasi non iure! Officiis quas repellat, eaque, maiores, quia modi saepe doloribus amet distinctio fuga quos deleniti sit. Laboriosam mollitia eveniet quibusdam quo. Ipsum quisquam mollitia perspiciatis exercitationem eveniet excepturi adipisci esse repudiandae sequi!</p>
                </div>
            </div>
        </div>
</main>
    </div>
<?php
    require 'footer.php';
?>
