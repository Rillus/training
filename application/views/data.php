<ul class="chartdata">
	<?php foreach($data->result() as $item){ ?>
		<li>
			<ul>
				<span class="action"><?php echo $actions[$item->action_id]['type']; ?></span>
				<span class="val1-unit"><?php echo $actions[$item->action_id]['val1_unit']; ?></span>
				<span class="val2-unit"><?php echo $actions[$item->action_id]['val2_unit']; ?></span>
				<span class="start"><?php echo $goal['start_date']; ?></span>
				<span class="end"><?php echo $goal['end_date']; ?></span>
				<li class="val1">
					<?php echo $item->val1; ?>
				</li>
				<li class="val2">
					<?php echo $item->val2; ?>
				</li>
				<span class="date">
					<?php echo $item->date; ?>
				</span>
			</ul>
		</li>
	<?php } ?>
</ul>
<canvas class="chart" width="250" height="150"></canvas>