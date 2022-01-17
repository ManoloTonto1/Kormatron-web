<?php
session_start();

	function get_queue()
	{
		$servername = "localhost";
		$username = "root";
		$password = "mypass";
		$dbname = "kormatron_";
		$id = $_SESSION['id'];

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$query = "
		SELECT toilet.id, toilet.location,toilet.type,toilet.status,toilet_log.time
		FROM toilet
		INNER JOIN toilet_log ON toilet.id=toilet_log.toilet_id
		where toilet_log.worker_id = '$id' AND toilet.status='1';
		";
		$result = $conn->query($query);
		$toilet = $result->fetch_all(MYSQLI_ASSOC);
		return $toilet;


		$conn->close();
	} ?>
	    <!-- Modal structure -->
		<?php include('lang/translate.php') ?>
    <?php
	

	if ($_SESSION['language'] == "nl") {
		include('lang/dutch.php');
	} else {
		include('lang/english.php');
	}
	?>
<table id="queue_table" class="table">
    		<thead>
    			<tr class="table-top">

    				<th width="20%"><?php echo $lang['toilet_floor']; ?></th>
    				<th width="20%"><?php echo $lang['toilet_type']; ?></th>
    				<th width="20%"><?php echo $lang['toilet_time']; ?></th>
    				<th width="30%"><?php echo $lang['toilet_status']; ?></th>
    				<th width="10%"><?php echo $lang['toilet_mark_as_done']; ?></th>
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
    						<td><button id="sex<?php echo $i['id'] ?>" class="product-module-icon-green"><i class="fas fa-check"></i></button></td>
    					</tr>
    					<div class="div1"></div>

    					<script>
    						// check if the modal exists. if it does not exist make a new one.
    						$(document).ready(function() {
    							$('#sex<?php echo $i['id'] ?>').click(function(e) {
    								e.preventDefault();
    								//execute the queuing function
    								var id = <?php echo $i['id'] ?>;
    								var time = '<?php echo $i['time'] ?>';
    								$.ajax({
    									type: "POST",
    									url: "db/finish_queue.php",
    									data: ({
    										"id": id,
    										"time": time,
    									}),

    									success: function(response) {

    										if (response.includes(true)) {

    											iziToast.success({
    												title: 'OK',
    												message: '<?php echo $lang['toilet_done'] ?>',
    											});
    											
    												location.reload();
    											
    										} else {
    											iziToast.error({
    												title: 'Error',
    												message: '<?php echo $lang['toilet_done_error'] ?>',
    											});

    										}
    									}
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