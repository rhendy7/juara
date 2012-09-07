
<div id="tabledata" class="section">
			<h2 class="ico_mug">Daftar Kegiatan Terakhir</h2>
			
		
<div class="box_messages"> 
					<?php // Change the values in this array to populate your dropdown as required ?>
					
				<select name="kategori" id="kategori">
					<option value=""id="lab">Pilih Kategori</option>
					<?php
					
					foreach($kategori->result() as $row)
						{ 
							if ($kode_kat == $row->id)
							{
								echo '<option  value="'.$row->id.'" selected="selected">'.ucwords($row->nama).'</option>';
							}
							else
							{
								echo '<option  value="'.$row->id.'">'.ucwords($row->nama).'</option>';
							}
						}
					
											
					?>	
					
					
					<span class="required">*</span>
				</select>
			</div>
	
			
		<table id="table">
			<thead>
			<tr>
				<th><input type="checkbox" class="noborder" /></th>
				<th>No </th>
				<th>Mulai</th>
				<th>Berakhir</th>
				<th>Nama kegiatan</th>
				<th>Tempat</th>
				
			</tr>
			</thead>
			<tbody>
			
			<?php foreach ($list->result() as $row) { ?>
			
			
			<tr>
				<td class="table_check"><input type="checkbox" class="noborder" /></td>
				<td class="table_date"></td>
				<td class="table_date"></td>
				<td class="table_title" width="450px"><a href="#"></a></td>
			
				<td width="140px"><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/edit.jpg" alt="edit" title="edit"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/cancel.jpg" alt="cancel" title="delete"/></a></td>
				<td class="table_title" width="150px"><a href="#"></a></td>
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
