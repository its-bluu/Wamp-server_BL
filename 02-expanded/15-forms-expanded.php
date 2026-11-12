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
			<!-- <input type="text" name='search' id='search' value="<?php echo (isset($_GET['search']) && $_GET['search']); ?>">  -->
			<input type="text" name='search' id='search' value="<?= (isset($_GET['search']) && $_GET['search']); ?>"> 
		</div>

		<!-- <input type="radio" name="opt" value='1' id="opt1" <?php if(isset($_GET['opt']) && $_GET['opt'] == 1){ echo 'checked'; } ?>> -->


		<?php 
			$checked1 = (isset($_GET['opt']) && $_GET['opt'] == 1 ? 'checked' : ''); // shorthand if
			$checked2 = (isset($_GET['opt']) && $_GET['opt'] == 2 ? 'checked' : ''); // shorthand if
		?>
		
		<div class="formfield">
			<input type="radio" name="opt" value='1' id="opt1" <?= $checked1; ?>>
			<label for="opt1">Optie 1</label>
			<input type="radio" name="opt" value='2' id="opt2" <?= $checked2; ?>>
			<label for="opt2">Optie 2</label>
		</div>

		<?php
			// trace($_GET['check']);
			$checkedB1 = (isset($_GET['check']) && in_array(1, $_GET['check']) ? 'checked' : '');
			$checkedB2 = (isset($_GET['check']) && in_array(2, $_GET['check']) ? 'checked' : '');
			$checkedB3 = (isset($_GET['check']) && in_array(3, $_GET['check']) ? 'checked' : '');
		?>

		<div class="formfield">
			<input type="checkbox" name="check[]" id="check1" value="1" <?= $checkedB1 ?>>
			<label for="check1">Check 1</label>
			<input type="checkbox" name="check[]" id="check2" value="2" <?= $checkedB2 ?>>
			<label for="check2">Check 2</label>
			<input type="checkbox" name="check[]" id="check3" value="3" <?= $checkedB3 ?>>
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