I want to...
<ul>
<?php foreach($goals->result() as $goal){ ?>
	<li>
		<?php 
		echo $goal->action.' ';
		echo $goal->val1;
		echo $actions[$goal->action]['val1_unit'].' '; 
		echo $actions[$goal->action]['conjunctive'].' '; 
		echo $goal->val2; 
		echo $actions[$goal->action]['val2_unit']; 
		?>
		<a href="<?php echo site_url('delete/'.$goal->id.'/'.1); ?>" class="load">Delete</a>
		<a href="<?php echo site_url('add/milestone/'.$goal->action); ?>" class="load">Add milestone</a>
		<div class="holder"></div>
	</li>
<?php } ?>
</ul>