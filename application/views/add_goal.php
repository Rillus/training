<form id="goal-set">
	I want to
	<select name="action" id="action">
		<option value="">--</option>
		<option value="run">run</option>
		<option value="lose">lose</option>
		<option value="gain">gain</option>
	</select>
	<div id="action-control"></div>
</form>

<form id="goal-update">
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