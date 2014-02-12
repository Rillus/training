<form action="<?php echo site_url(); ?>/add/update">
	I've gained
	<label>
		<input type="text" name="val1" placeholder="0" data-required="true" data-type="decimal"> kg.
	</label>
	<input type="hidden" name="type" value="<?php echo $type; ?>">
	<button type="submit">Update</button>
</form>