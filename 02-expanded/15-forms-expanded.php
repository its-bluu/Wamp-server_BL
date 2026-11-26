<?php include_once '../functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="15-forms-expanded.css">
</head>
<body>
    
	<form action="" method="get">

		<div class="formfield">
			<label for="search" class="textLabel">Naar wat wil je zoeken?</label>
			<input type="text" name='search' id='search' value=""> 
		</div>

		
		<div class="formfield">
			<input type="radio" name="opt" value='1' id="opt1" <?= $checked1; ?>>
			<label for="opt1">Optie 1</label>
			<input type="radio" name="opt" value='2' id="opt2" <?= $checked2; ?>>
			<label for="opt2">Optie 2</label>
		</div>


		<div class="formfield">
			<input type="checkbox" name="check[]" id="check1" value="1">
			<label for="check1">Check 1</label>
			<input type="checkbox" name="check[]" id="check2" value="2">
			<label for="check2">Check 2</label>
			<input type="checkbox" name="check[]" id="check3" value="3">
			<label for="check3">Check 3</label>
		</div>


		<div class="formfield">
			<select name="drinks" id="drinks">
				<option value="lemon">Lemon Juice</option>
				<option value="water">Wotah</option>
				<option value="coke">Coca Cola</option>
			</select>
		</div>

        <input type="submit" value='Zoeken'>
    </form>
    
	<?php 
		//========== Show selected values in html after submitting. That's it.
		
	?>

    <script src="15-forms-expanded.js"></script>
</body>
</html>