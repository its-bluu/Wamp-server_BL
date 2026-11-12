<?php include_once '../functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    
	<form action="17TASK-form-validation.php" method="POST">

		<label for="username">username</label>
		<input type="text" id="username" name="username">

		<label for="age">age</label>
		<input type="number" id="age" name="age">

		<label for="email">email</label>
		<input type="text" id="email" name="email">

		<input type="submit" value="login">
	</form>

	<?php 
		// ===========================================================
		// Validate the user input. 
		// 1. a username shouldn't be empty and should only contain letters.
		// 2. the user should be at least 18 years old
		// 3. the email should be, an email 
		// 4. make sure all data is safe before checking.
		// 5. if any of these is incorrect, show an error message
		// ===========================================================

		// trace($_POST);
		
		if(isset($_POST['username'])){

			if(!isset($_POST['username']) OR htmlentities($_POST['username']) == ''){
				echo "Vul je naam in. <br>";
			}else if(!ctype_alpha(htmlentities($_POST['username']))){
				echo 'Je naam mag alleen alfabetische letters bevatten. <br>';
			}

			if(isset($_POST['age']) && htmlentities($_POST['age']) < 18){
				echo 'Jij bent te jong hiervoor. <br>';
			}

			if(isset($_POST['email']) && !filter_var(htmlentities($_POST['email']), FILTER_VALIDATE_EMAIL)){
				echo 'Gelieve een correct e-maildres in te vullen <br>';
			}

		}

		
		// Time: 20? minutes
		// Record: 
		// Ready? Upload to smartschool!
	?>

    <script src="../app.js"></script>
</body>
</html>