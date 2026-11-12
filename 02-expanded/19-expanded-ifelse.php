<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    
	<?php 
        $a = 'test';
        $b;

        //========== Short hand if
        if($a == 'test'){
            echo "ja";
        }
        if($a == 'test') echo "ja";



        //========== empty - controleren of iets leeg is
        if($a == '') echo "Het is een lege string";

        if(empty($a)) echo "Er zit helemaal niks in";
        else echo "Er zit wel iets in"; // correct



        //========== isset - controleren of iets bestaat
        if(isset($c)){
            echo "het bestaat";
        }else{
            echo "het bestaat niet"; // correct
        }

        if(isset($_GET)) echo "GET bestaat altijd";
        
        if(isset($_GET['key'])) echo "incorrect";



        //========== One-line if...else
        // optie 1
        $a = 13;
        $b = $a < 10 ? "Hello" : "Good Bye";

        $c = (isset($_GET['check']) && in_array('3', $_GET['check'])) ? true : false;


	?>

    <script src="app.js"></script>
</body>
</html>