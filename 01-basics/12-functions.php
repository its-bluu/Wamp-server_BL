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
		//========== functions
		function lachmetleerling(){

		}


		//========== return values
		function lachmetleerling2(){
			return lachmetleerling();
		}


		
		//========== calling functions
		lachmetleerling();


		echo 'asdfkfjdhs';
		//========== functions with (fallback) parameters
		function lachmetleerling3(){
			return 'er is een aaron met 2 aas'; // stopt func en stuurt data terug naar de plaats waar de func is uitgevoerd.
		}
		lachmetleerling3();
		$terugdata = lachmetleerling3();

		echo $terugdata();
		echo lachmetleerling3();



		
		// function rand($start, $end){

		// }

		function lachenmet($naam){

		}
		function lachenmet2($naam = "lars"){
			
		}
	?>

	<a href="11TASK-loop-o-loop.php" class='previousTopic' disabled>Ga naar vorig topic</a>
    <a href="12TASK-roll-dice.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>


