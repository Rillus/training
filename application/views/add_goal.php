<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

<form>
	<select name="type">
		<option>run</option>
		<option>lose</option>
		<option>gain</option>
	</select>
	<input type="text" name="amount" placeholder="0">
	<select>
		<option>km</option>
		<option>kg</option>
	</select>

	<?php if (type == "run"){ ?>
		in <input type="text" name="run_time" placeholder="0"> minutes
	<?php } ?>
</form>

</body>
</html>