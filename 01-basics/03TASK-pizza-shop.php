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
	// ===========================================================
	// 1. Make variables for: pizza price, topping price, delivery fee, number of pizzas ordered, number of toppings per pizza, and number of people at the table.
	// 2. Calculate the total price of the order, and how many slices each person gets if each pizza has 8 slices.
	// 3. Echo out the results in a user-friendly way.
	// ===========================================================
	$pizzaAmount = 8;
	$pPrice = 2;
	$topPrice = 3;
	$deliverFee = 2;
	$topNum = 5;
	$People = 8;

	$netPrice = $pizzaAmount * $pPrice + ($pizzaAmount * ($topPrice * $topNum));
	$brutPrice = $netPrice + $deliverFee;
	$slicesPP = ($pizzaAmount * 8) / $People;
	echo ("the netto is $netPrice"),"\r\n";
	echo ("the brutto is $brutPrice"), "\r\n";
	echo("there are $slicesPP slices per person"), "\r\n";

	
	// Time: ?
	// Record: 6:59 Falco (2025)
	// Ready? Push to GIT!
	?>
	
    <a href="03-basic-operators.php" class='previousTopic'>Ga naar vorig topic</a>
    <a href="04-arrays.php class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>