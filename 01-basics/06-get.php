<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
	
	<!-- Formulier -->
     <!-- get stuurt data door via  de URL -->
    <form action="" method="get">
        <label for="username">Gebruikersnaam:</label>
        <input type="text" name="username" id="username">
        <label for="password">password:</label>
        <input type="password" name="password" id="password">


        <input type="submit" value="login">
        <!-- <button>Login</button> (kan ook)-->
    </form>

	<?php 
		//========== GET superglobal
        
        echo '<pre>';
        print_r($_GET);

        // eerst controleeren of de waarde in de array bestaat
        if(isset($_GET['username'])){ 
        echo "Welcome, " . $_GET['username'];
    }
	?>
    
    <a href="05TASK-if-else-and-operators.php" class='previousTopic' disabled>Ga naar vorig topic</a>
    <a href="06-post.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>