<div id='toilets'>
				<h3><?php echo $lang['toilets']?> </h3>
				<table id="toilet_table" class="table table-striped table-hover">
			<thead>
				<tr>

					<th width="25%"><?php echo $lang['toilet_floor']; ?></th>
					<th width="25%"><?php echo $lang['toilet_type']; ?></th>
					<th width="35%"><?php echo $lang['toilet_location']; ?></th>
					<th width="15%"><?php echo $lang['toilet_view']; ?></th>
				</tr>
			</thead>
			
			<tbody>
			<?php if(empty($toilets))
		{?>
			<td colspan="4" style='text-align: center;'> <?php echo "Nothing to see here ¯\_(ツ)_/¯";?> </td>
	<?php	} 
	else{
	?>
				<?php
				foreach($toilets as $i)
				{
				?>
<?php $time = strtotime($i['job_date'])?>
				
					<tr>
						<td><?php echo $i['job_id'];?></td>
						<td><?php echo to_date($time,'DD-MON-YYYY-HH24-MI-SS');?></td>
						<td><?php echo $i['job_status'];?></td>
						<td><?php echo $i['job_name'];?></td>
					</tr>
				<?php
				}}
				?>
			</tbody>
		</table>
		</div>
