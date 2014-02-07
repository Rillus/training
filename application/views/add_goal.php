<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

<form id="goal_set">
	I want to
	<select name="action">
		<option value="run">run</option>
		<option value="lose">lose</option>
		<option value="gain">gain</option>
	</select>
	<input type="text" name="amount" placeholder="0">
	<select>
		<option value="run_unit">km</option>
		<option value="gain_unit">kg</option>
		<option value="lose_unit">kg</option>
	</select>

	<?php if (type == "run"){ ?>
		in <input type="text" name="run_time" placeholder="0"> minutes
	<?php } else { ?>
		my current weight is <input type="text" name="gain_lose_weight" placeholder="0"> kg
	<?php } ?>
</form>

<form id="goal_update">
	I've
	<select name="action">
		<option value="run">run</option>
		<option value="lose">lost</option>
		<option value="gain">gained</option>
	</select>
	<input type="text" name="amount" placeholder="0">
	<select>
		<option value="run_unit">km</option>
		<option value="gain_unit">kg</option>
		<option value="lose_unit">kg</option>
	</select>

	<?php if (type == "run"){ ?>
		in <input type="text" name="run_time" placeholder="0"> minutes
	<?php } ?>
</form>

</body>
</html>