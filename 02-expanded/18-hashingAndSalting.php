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
    
	<?php 
		//========== Hashing (data encoderen)
        $password = 'hunter34';
        $hashedPassword = hash('sha512', $password);
        trace($hashedPassword);


		//========== Salting (een stukje data toevoegen pre-hash om de encodering veiliger te maken)
        $salt = 'sdfaoiihjasfopjsdhafpojahjsdpofh2389u4r89-237';
        $hashedPassword = hash('sha512', $salt . $password);
        trace($hashedPassword);


	?>

    <script src="app.js"></script>
</body>
</html>