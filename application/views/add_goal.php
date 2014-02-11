<form id="goals">
</form>

<form id="goal-set">
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
		<button type="submit">Add goal</button>
	<fieldset>
</form>

<form id="goal-update">
</form>