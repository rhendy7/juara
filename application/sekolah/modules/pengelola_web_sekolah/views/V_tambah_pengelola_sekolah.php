<?php 

// $this->load->view('content/css'); 
      echo  modules::run('templates');
?>








		
		<fieldset >
		<legend>Tambah Pengelola Sekolah </legend>
			<!-- Php Form  -->			
			
			<?php echo form_open($this->uri->uri_string()); ?>
			
			 <!--Start-->
			
			<div class="input_box"> 
					<?php // Change the values in this array to populate your dropdown as required ?>
				
				<select name="tingkat_sekolah" id="tingkat_sekolah">
					<option value="">Pilih Kategori</option>
					<?php foreach($tingkat_sekolah->result() as $row): ?>
					
					
					<option value="<?php echo $row->id ?>"><?php echo $row->nama;?> (<?php echo $row->kode;?>)</option>
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
			<span class="required">* <?php echo form_error('nama'); ?></span>
			</div>
			
			<div class="xlabel">
				<label for="nama">Nama Sekolah </label>
			</div>
			
			<!-- End -->  
			 <!--Start-->
			
			<div class="input_box"> 
			
			<input type="text" name="username" value="<?php echo set_value('username'); ?>" />
			<span class="required">* <?php echo form_error('username'); ?></span>
			</div>
			
			<div class="xlabel">
				<label for="username">Nomor Induk Sekolah</label>
			</div>
			
			<!-- End --> 
			<div class="button"> 
			<?php echo form_submit( 'submit', 'Submit');?>
		
			</div>		
			
			
			
		
			</form>

			
			</fieldset>	