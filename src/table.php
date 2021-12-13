<?php include('src/db/connectdb.php') ?>
<?php include('src/db/scripts.php') ?>
<?php include('src/lang/translate.php') ?>

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
						<td><?php echo change_floor($i['location']); ?></td>
						<td><?php echo change_type($i['type']); ?></td>
						<td><?php echo todate(strtotime($i['time'])); ?></td>
						<td><?php echo change_status($i['status']); ?></td>
						<td><button id="module-info<?php echo $i['id'] ?>" data-iziModal-open="#modal<?php echo $i['id'] ?>" class="product-module-icon"><i class="fas fa-info-circle"></i></button></td>
					</tr>

					<!-- Modal structure -->
					<div id="modal<?php echo $i['id'] ?>" data-iziModal-title="Toilet Info" data-iziModal-icon="fas fa-clipboard-list" data-iziModal-headerColor="#252833" data-iziModal-background="#2f3241">
						<section class="hide modal-body">
							<form action="" method="post" id="product-form">
								<div id="modal-input-container">
									<span class="bold"><?php echo $lang['toilet_id'] . ": "; ?></span><?php echo $i['id']; ?> <br>
									<span class="bold"><?php echo $lang['toilet_floor'] . ": "; ?></span><?php echo change_floor($i['location']); ?> <br>
									<span class="bold"><?php echo $lang['toilet_type'] . ": "; ?></span><?php echo change_type($i['type']); ?><br>
									<span class="bold"><?php echo $lang['toilet_time'] . ": "; ?></span><?php echo todate(strtotime($i['time'])); ?><br>
									<span class="bold"><?php echo $lang['toilet_status'] . ": "; ?></span><?php echo change_status($i['status']); ?><br>
									<div id="atribute-container"></div>
								</div>
							</form>


							<footer>
								<button id="add_queue<?php echo $i['id'] ?>" class="modal-btn" name="submit"><?php echo $lang['toilet_add'] ?> <i class="fas fa-plus"></i></button>

							</footer>

						</section>
					</div>
					<script>
						$(document).ready(function() {

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
					</script>
			<?php

				}
			}
			?>
		</tbody>
	</table>
</div>


<script>
	function refresh_div() {
		$("#toilets").load("src/table_reload.php");
	}

	t = setInterval(refresh_div, 3000);
</script>