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
		//========== Indexed array
        $indexedArray = [
            'haarkleur' => 'bruin',
            'oogkleur' => 'oranje',

        ];



        //========== Associative/keyed array
        



        //========== Access arrays
        $keyedArray['oogkleur'];
        $indexedArray[0];



        //========== Manipulate arrays

        //---- add
        $keyedArray['nieuwewaarde'] = 'de nieuwe waarde';
        print_r($keyedArray);

        $indexedArray[] = 'derde';
        print_r($indexedArray)

        //---- edit
        $keyedArray['nieuweWaarde'] = 'de allernieuwste waarde';
        $indexedArray[0] = 'nieuweNul';

        //---- remove
        

        //---- remove value
        
		


        //========== Array functions
        
	?>
    
    <a href="03TASK-pizza-shop.php" class='previousTopic'>Ga naar vorig topic</a>
    <a href="04TASK-multi-dimension.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>