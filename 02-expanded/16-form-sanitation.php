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
    
	<form action="16-form-sanitation.php" method="POST">
		<label for="username">username</label>
		<input type="text" id="username" name="username">

		<label for="age">age</label>
		<input type="number" id="age" name="age">

		<label for="email">email</label>
		<input type="text" id="email" name="email">

		<input type="submit" value="login">
	</form>

	<?php 
		//========== Sanitize user input. 2 methods
		htmlentities($_POST['username']);

		
	?>

    <script src="../app.js"></script>
</body>
</html>




- Sla en haal data op uit json
- Toon enkele statistieken