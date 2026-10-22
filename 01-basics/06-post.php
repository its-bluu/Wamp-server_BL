<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
	<?php
    if(isset($_POST['username'])){
        $username = $_POST['username'];
    }else{
        $username = '';

    }
    ?>
	<!-- Formulier -->
    <form action="" method="post">
        <label for="username">Gebruikersnaam:</label>
        <input type="text" name="username" id="username" value="<?= $username; ?>">
        <label for="password">password:</label>
        <input type="password" name="password" id="password">


        <input type="submit" value="login">
        <!-- <button>Login</button> (kan ook)-->
        
        
    </form>


	<?php 
		//========== POST superglobal
        


        
	?>

    <a href="06-get.php" class='previousTopic' disabled>Ga naar vorig topic</a>
    <a href="06TASK-pizza-shop-reloaded.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>