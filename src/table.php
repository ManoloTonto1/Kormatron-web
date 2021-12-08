<?php include('src/db/connectdb.php')?>
<?php include('src/db/scripts.php')?>
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
			<?php if(empty($toilet))
		{?>
			<td colspan="4" style='text-align: center;'> <?php echo "Nothing to see here ¯\_(ツ)_/¯";?> </td>
	<?php	} 
	else{
	?>
				<?php
				foreach($toilet as $i)
				{
				?>
				<?php print_r($i);?>
				
					<tr>
						<td><?php echo $i;?></td>
						<td><?php echo $i;?></td>
						<td><?php echo $i;?></td>
						<td>i</td>
					</tr>
				<?php
				}}
				?>
			</tbody>
		</table>
		</div>
