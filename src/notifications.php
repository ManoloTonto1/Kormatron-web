    <!-- Modal structure -->
	
    <div id="modal-notifications" data-iziModal-title="Notifications" data-iziModal-icon="fa fa-diamond"
      data-iziModal-headerColor="#252833" data-iziModal-background="#2f3241">
	  <table id="queue_table" class="table">
		<thead>
			<tr class="table-top">

				<th width="20%"><?php echo $lang['toilet_floor']; ?></th>
				<th width="20%"><?php echo $lang['toilet_type']; ?></th>
				<th width="20%"><?php echo $lang['toilet_time']; ?></th>
				<th width="30%"><?php echo $lang['toilet_status']; ?></th>
				<th width="10%"><?php echo $lang['toilet_view']; ?></th>
			</tr>
		</thead>

		<tbody>
			<?php if (empty(get_queue())) { ?>
				<td colspan="5" style='text-align: center;'> <?php echo "Nothing to see here ¯\_(ツ)_/¯"; ?> </td>
			<?php	} else {
			?>

				<?php
				foreach (get_queue() as $i) {
				?>

					<tr class="table-bottom">
						<td><?php echo change_floor_reload($i['location']); ?></td>
						<td><?php echo change_type_reload($i['type']); ?></td>
						<td><?php echo todate(strtotime($i['time'])); ?></td>
						<td><?php echo change_status_reload($i['status']); ?></td>
						<td><button id="sex"><i class="fas fa-info-circle"></i></button></td>
					</tr>
					<div class="div1"></div>

					<script>
						// check if the modal exists. if it does not exist make a new one.


					</script>
			<?php
				}
			}
			?>
		</tbody>
	</table>

</div>