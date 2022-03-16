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
			<div class="form-background">
				<p></p>
				<form action="includes/login.inc.php" class="form" method='post'>	
					<h1 style="font-family: Arial;">Login</h1>
                    <br>
					<input type="text" name="uid" placeholder="Username/Email...">
					<input type="password" name="pwd" placeholder="Password...">
					<input type="submit" name="submit-login" value="Login">
				<?php
				if(isset($_GET["error"])){
					if($_GET["error"] == "emptyinput"){
						echo "<p style='color: red;'>Fill in all fields</p>";
					} 
					else if ($_GET["error"] == "wronglogin"){
						echo "<p style='color: red;'> Incorrect login!</p>";  
					}
				}
				?>
					<br>
					<a href="index.php" style="text-decoration: underline; color: blue;">Back to Signup</a>
				</form>
			</div>
		</main>
	</body>
</html>