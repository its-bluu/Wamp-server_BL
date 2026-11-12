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
        //========== While loops
        $a = 0;
        while ($a <= 10) {
            
            
            if ($a == 0) {
                echo "dit is de " . $a + 1 .  "ste keer<br>";
            }
            else {
                echo "dit is de " . $a + 1 . "de keer<br>";
            }
                
            $a++;
            // break;
        }

        
	?>


    <a href="09-for-loops.php" class='previousTopic' disabled>Ga naar vorig topic</a>
    <a href="11-foreach.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>