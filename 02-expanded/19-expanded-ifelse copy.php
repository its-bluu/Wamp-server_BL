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
            echo 'ja';
        }
        if($a == 'test') echo 'ja';


        //========== empty - controleren of iets leeg is
        if($a == '') echo 'het is een lege string';

        if(empty($a)) echo 'er zit helemaal niks in';
        else echo 'er zit wel iets in';



        //========== isset - controleren of iets bestaat
        if(isset($c)){
            echo 'het bestaat';
        }else{
            echo 'het bestaat niet';
        }
        
        //========== Alleen een gevolg geven als iets niet bestaat
        if(!isset($c)) echo 'het bestaat niet';

        if(isset($_GET)) echo 'GET/POST bestaat altijd';

        if(isset($_GET['willekeurig'])) echo 'bestaat niet';




        //========== One-line if...else
        $a = 13;
        $b = $a < 10 ? 'Hello' : 'Goodbye'; // $b = if a is smaller then 10 then 'hello', else 'goodbye'

        $c = isset($_GET['check']) && in_array('3', $_GET['check']) ? true : false;


	?>

    <script src="app.js"></script>
</body>
</html>