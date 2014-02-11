<form id="goals" data-user="1">
</form>

<form id="goal-set" action="<?php echo site_url(); ?>/add/goal">
	<fieldset>
	    <legend>Add a new goal</legend>
		<label>
			By <input name="goal_date" value="30/05/2014" disabled>
		</label>
		<label>
			I want to have
			<select name="action" id="action" data-required="true">
				<option value="">--</option>
				<option value="run">run</option>
				<option value="lose">lost</option>
				<option value="gain">gained</option>
			</select>
		</label>
		<div id="action-control"></div>
		<input name="user_id" value="1" type="hidden">
		<button type="submit">Add goal</button>
	<fieldset>
</form>

<form id="goal-update">
</form>