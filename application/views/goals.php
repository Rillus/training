I want to...
<ul>
<?php foreach($goals->result() as $goal){ ?>
	<li>
		<?php 
		echo $actions[$goal->action_id]['type'];
		echo $goal->val1;
		echo $actions[$goal->action_id]['val1_unit'].' '; 
		echo $actions[$goal->action_id]['conjunctive'].' '; 
		echo $goal->val2; 
		echo $actions[$goal->action_id]['val2_unit']; 
		?>
		<a href="<?php echo site_url('delete/'.$goal->id.'/1'); ?>" class="load reload">Delete</a>
		<a href="<?php echo site_url('add/milestone/'.$goal->action_id.'/'.$goal->id); ?>" class="load">Add milestone</a>
		<a href="<?php echo site_url('data/'.$goal->id); ?>" class="load graph">View graph</a>
		<div class="holder"></div>
	</li>
<?php } ?>
</ul>