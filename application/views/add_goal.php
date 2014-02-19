<?php $userId = 1; ?>
<a href="#" class="show-next">Set new challenge</a>
<form id="goal-set" class="hidden" action="<?php echo site_url(); ?>/add/goal">
	<fieldset>
	    <legend>Add a new goal</legend>
		<label>
			By <input name="goal_date" value="30/05/2014" disabled>
		</label>
		<label>
			I want to
			<select name="action_id" id="action" data-required="true">
				<option value="">--</option>
				<?php foreach($actions->result() as $action){ ?>
					<option value="<?php echo $action->id; ?>"><?php echo $action->type; ?></option>
				<?php } ?>
			</select>
		</label>
		<div id="action-control"></div>
		<input name="user_id" value="<?php echo $userId; ?>" type="hidden">
		<button type="submit">Add goal</button>
	</fieldset>
</form>

<div id="goals" data-user="<?php echo $userId; ?>">
</div>