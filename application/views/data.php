<ul class="chartdata">
<?php foreach($data->result() as $item){ ?>
	<li>
		<?php 
		echo $item->val1;
		echo $item->val2; 
		?>
	</li>
<?php } ?>
</ul>
<canvas class="chart" width="400" height="400"></canvas>