<form action="<?php echo site_url(); ?>/add/update">
	My new weight is
	<label>
		<input type="text" name="val1" placeholder="0" data-required="true" data-type="decimal"> kg.
	</label>
	<input type="hidden" name="user_id" value="1">
	<input type="hidden" name="action_id" value="<?php echo $actionId; ?>">
	<input type="hidden" name="goal_id" value="<?php echo $goalId; ?>">
	<button type="submit">Update</button>
</form>