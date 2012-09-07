<?php if($list != FALSE) { ?>

	
			
		<table id="table">
			<thead>
			<tr>
				<th><input type="checkbox" class="noborder" /></th>
				<th>Tanggal Input </th>
				<th>Judul</th>
				<th></th>
				
			</tr>
			</thead>
			<tbody>
			
			<?php foreach ($list->result() as $row) { ?>
			
			
			<tr>
				<td class="table_check"><input type="checkbox" class="noborder" /></td>
				<td class="table_date"><?php echo $row->tanggal_input; ?></td>
				<td class="table_title" width="650px"><a href="#"><?php echo $row->judul;?></a></td>
			
				<td width="140px"><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/edit.jpg" alt="edit" title="edit"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/cancel.jpg" alt="cancel" title="delete"/></a></td>
				
			</tr>
			
			<?php } ?>
			
			
			</tbody>
			
		</table>
		
		
		
			<div id="table_options" class="clearfix">
				
				<ul>
					<li><a href="#">Select All</a></li>
					<li><a href="#">Select None</a></li>
					<li><label>	Action:<select id="kategoria" name="kategoria">
									<option value="1">Option 1</option> 
									<option value="2">Option 2</option> 
									<option value="3">Option 3</option> 
									<option value="4">Option 4</option> 
								</select>
				</label></li>
				</ul>
				
				
			</div>
			
			<div class="pagination">
				

				<?php echo $this->pagination->create_links(); ?>
			</div>
			
			
		</div> <!-- end #tabledata -->
<?php } else {?>

<h3> No Data </h3>

<?php } ?>