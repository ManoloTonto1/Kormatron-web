<?php include('db/connectdb.php') ?>
<?php include('db/scripts.php') ?>
<?php include('lang/translate.php') ?>
<?php include('lang/english.php') ?>

<div id='toilets'>

	<h3><?php echo $lang['toilets'] ?> </h3>
	<table id="toilet_table" class="table">
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
			<?php if (empty(get_toilets())) { ?>
				<td colspan="5" style='text-align: center;'> <?php echo "Nothing to see here ¯\_(ツ)_/¯"; ?> </td>
			<?php	} else {
			?>

				<?php
				foreach (get_toilets() as $i) {
				?>

					<tr class="table-bottom">
						<td><?php echo change_floor_reload($i['location']); ?></td>
						<td><?php echo change_type_reload($i['type']); ?></td>
						<td><?php echo todate(strtotime($i['time'])); ?></td>
						<td><?php echo change_status_reload($i['status']); ?></td>
						<td><button id="module-info<?php echo $i['id'] ?>" data-iziModal-open="#modal<?php echo $i['id'] ?>" class="product-module-icon"><i class="fas fa-info-circle"></i></button></td>
					</tr>
					<div class="div1"></div>

					<script>
						// check if the modal exists. if it does not exist make a new one.
						if (!document.getElementById("modal<?php echo $i['id']; ?>")) {
							$(document).ready(function() {
								//if there was an instance of the modal, remove it.
								$('#modal<?php echo $i['id']?>').iziModal('destroy');
								//create a new modal.
								$(".div1").load("table_modal.php?id=<?php echo $i['id']; ?>");
								$('#modal<?php echo $i['id'] ?>').iziModal({
									transitionIn: 'bounceInDown'
								});
								$('#add_queue<?php echo $i['id'] ?>').click(function(e) {
									e.preventDefault();
									//execute the queuing function
									var id = <?php echo $i['id'] ?>;
									$.ajax({
										type: "POST",
										url: "src/db/post_queue.php",
										data: ({
											"id": id
										}),
										dataType: "json",
										success: function(response) {
											if (response.success == true) {
												iziToast.success({
													title: 'OK',
													message: '<?php echo $lang['toilet_added'] ?>',
												});
											} else {
												iziToast.error({
													title: 'Error',
													message: '<?php echo $lang['toilet_added_error'] ?>',
												});

											}
										}
									});

									$('#modal<?php echo $i['id'] ?>').iziModal('close', {
										transition: 'bounceOutDown' // Here transitionOut is the same property.
									});


								});


							});
						}

					</script>
			<?php
				}
			}
			?>
		</tbody>
	</table>
</div>