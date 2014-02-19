<ul class="chartdata" style="display:none">
	<?php foreach($data->result() as $item){ ?>
		<li>
			<span class="action"><?php echo $actions[$item->action_id]['type']; ?></span>
			<span class="val1-target"><?php echo $goal['val1']; ?></span>
			<span class="val1-unit"><?php echo $actions[$item->action_id]['val1_unit']; ?></span>
			<span class="val2-target"><?php echo $goal['val2']; ?></span>
			<span class="val2-unit"><?php echo $actions[$item->action_id]['val2_unit']; ?></span>
			<span class="start"><?php echo $goal['start_date']; ?></span>
			<span class="end"><?php echo $goal['end_date']; ?></span>
			<ul>
				<li class="val1">
					<?php echo $item->val1; ?>
				</li>
				<li class="val2">
					<?php echo $item->val2; ?>
				</li>
				<li class="date">
					<?php echo $item->date; ?>
				</li>
			</ul>
		</li>
	<?php } ?>
</ul>
<canvas class="chart" width="0" height="0"></canvas>
<div id="chart" style="width:100%; height:400px;"></div>