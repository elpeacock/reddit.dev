<!DOCTYPE html>
<html>
<head>
	<title>roll the dice</title>
</head>
<body>
	<h1>Your Guess : <?= $guess ?></h1>
	<h1>Actual roll : <?= $roll ?></h1>
<?php if ($guess == $roll) : ?>
	<h1><?= 'good guess, you win' ?></h1>
<?php else : ?>
	<h1><?= 'sorry, guess again' ?></h1>
<?php endif ?>

</body>
</html>