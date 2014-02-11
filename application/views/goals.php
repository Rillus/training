I want to...
<ul>
<?php foreach($goals->result() as $goal){ ?>
	<li>
		<?php 
		echo $goal->action.' ';
		echo $goal->val1;
		echo $actions[$goal->action]['val1_unit'].' '; 
		echo $goal->val2; 
		echo $actions[$goal->action]['val2_unit']; 
		?>
	</li>
<?php } ?>
</ul>