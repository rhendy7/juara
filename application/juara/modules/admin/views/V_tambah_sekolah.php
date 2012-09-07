<?php 

// $this->load->view('content/css'); 
      echo  modules::run('templates');
?>








		<?php echo $msg; ?>
		<fieldset >
		<legend>Tambah Sekolah </legend>
			<!-- Php Form  -->			
			
			<?php echo form_open($this->uri->uri_string()); ?>
			
			 <!--Start-->
			
			<div class="input_box"> 
					<?php // Change the values in this array to populate your dropdown as required ?>
				
				<select name="tingkat_sekolah" id="tingkat_sekolah">
					<option value="">Pilih Kategori</option>
					<?php foreach($tingkat_sekolah->result() as $row): ?>
					
					
					<option value="<?php echo $row->id ?>"><?php echo $row->tingkat;?> (<?php echo $row->kode;?>)</option>
					<?php endforeach; ?>
					
				</select>
				<span class="required">*<?php echo form_error('tingkat_sekolah'); ?></span>
				</div>
				
				<div class="xlabel">
							<label for="tingkat_sekolah">Tingkat Sekolah</label>
				</div>
			
			<!-- End -->  
						
			 <!--Start-->
			
			<div class="input_box"> 
			
			<input type="text" name="nama" value="<?php echo set_value('nama'); ?>" />
			<input type="hidden" name="unit_kerja" value="2" />
			<span class="required">* <?php echo form_error('nama'); ?></span>
			</div>
			
			<div class="xlabel">
				<label for="nama">Nama Sekolah </label>
			</div>
			
			<!-- End -->  
			 <!--Start-->
			
			<div class="input_box"> 
			
			<input type="text" name="no_induk" value="<?php echo set_value('no_induk'); ?>" />
			<span class="required">* <?php echo form_error('no_induk'); ?></span>
			</div>
			
			<div class="xlabel">
				<label for="no_induk">Nomor Induk Sekolah</label>
			</div>
			
			<!--Start-->
			
			<div class="input_box"> 
					<?php // Change the values in this array to populate your dropdown as required ?>
				
				<select name="status" >
					<option value="">Pilih Status</option>
					<?php foreach($status->result() as $row): ?>
					
					
					<option value="<?php echo $row->id ?>"><?php echo $row->status;?> </option>
					<?php endforeach; ?>
					
				</select>
				<span class="required">*<?php echo form_error('status'); ?></span>
				</div>
				
				<div class="xlabel">
							<label for="Status">Status Sekolah</label>
				</div>
			
			<!-- End -->  
			
			
			<!-- End --> 
			<div class="button"> 
			<?php echo form_submit( 'submit', 'Submit');?>
		
			</div>		
			
		
			
		
			</form>

			
			</fieldset>	