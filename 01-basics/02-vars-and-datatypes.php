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
        //========== Variabelen
        $naam = 'MrMr';
        echo $naam;


        //========== Datatypes
        $string = "een tekstje";
        $boolean = true; // or false
        $indexedArray = ['string1', 'string2']; // kan alle soorten data bijhouden
        $keyedArray = [ // Assosiative arrays
            'kleur' => 'geel',
            'aantal' => 5
        ];
        $int = 9; 
        $float = 9.01; // Decimalen komen na de punt


        //========== Array uitlezen
        echo $indexedArray[1];
        echo $keyedArray['aantal'];

        echo "<pre>"; // proper maken
        print_r($keyedArray);
        var_dump($keyedArray);
        echo "</pre>";

        
        // Maak gebruik van comments om jezelf te helpen


	?>



    <a href="_index.php" class='previousTopic'>Ga naar vorig topic</a>
    <a href="02TASK-secret-agent.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>