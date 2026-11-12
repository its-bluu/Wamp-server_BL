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
		//========== For loops
        for ($i=0; $i <= 4; $i++) { 
            
            if ($i == 0) {
                echo "dit is de " . $i + 1 .  "ste keer<br>";
            }
            else {
                echo "dit is de " . $i + 1 . "de keer<br>";
            }
            
        }




		// https://www.php.net/manual/en/control-structures.for.php
	?>

    <a href="08TASK-switch.php" class='previousTopic' disabled>Ga naar vorig topic</a>
    <a href="10-while-loops.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>