<?php 

// $this->load->view('content/css'); 
      echo  modules::run('templates');
	  echo  modules::run('templates/step_wizard');
	  echo  modules::run('templates/input_mask');
?>


<script type="text/javascript">/*<![CDATA[*/// 
   jQuery(function($) {
      $.mask.definitions['~']='[+-]';
      $("#nss").mask("999-999-99?9-999999");
	  $("#nis").mask("999-999-99?9-999999");
	  
	  $("#kodeposs").mask("99-99?9");
	  
	  $("#telp").mask("9999-999-99?9-999999");
	  $("#telp2").mask("9999-999-99?9-999999");
	  $("#fax").mask("9999-999-99?9-999999");
	  
	  $("#lat_degrees").mask("99?9");
	  $("#lat_minutes").mask("99");
	  $("#lat_second").mask("99");
	  
	  $("#long_degrees").mask("99?9");
	  $("#long_minutes").mask("99");
	  $("#long_second").mask("99");
	  
		
   });

   
   </script> 	



<div id ="step">

	<ul id="mainNav" class="threeStep">
		<li class="current"><?php echo anchor('pengelola_web_sekolah/form_profil_sekolah', '<em>Langkah 1: Profil Sekolah</em>','title'); ?></li><span id="ujung"></span>
		<li><?php echo anchor('pengelola_web_sekolah/form_staf_detail1', '<em>Langkah 2: Profil Pengelola</em>','title'); ?></li>
		<li><?php echo anchor('pengelola_web_sekolah/form_konfirmasi', '<em>Langkah 3: Konfirmasi</em>','title'); ?></li>
	</ul>
</div>	
	<div class="clearfloat">&nbsp;</div>


<?php // for validation messages box ?>
<?php if($this->uri->uri_string() != "pengelola_web_sekolah/form_profil_sekolah1") { ?>
	<div class="error_msg"> <p> Isian anda ada yang perlu diperbaiki, mohon periksa kembali isian dibawah ini </p> </div>
<?php } ?>

		
		<fieldset id="field_profil" >
		<legend>Profil Sekolah </legend>
			<!-- Php Form  -->			
			
			<?php echo form_open_multipart($post); ?>
			
			
			 <!--Start-->
			
			<div class="input_box"> 
			
			<input type="text" name="nama" value="<?php echo ucfirst($sekolah->nama); ?>" readonly class="readonly" />
			<span class="required">* <?php echo form_error('nama'); ?></span>
			</div>
			
			<div class="xlabel">
				<label for="nama">Nama Sekolah </label>
			</div>
			
			<!-- End -->  
			
			  <!--Start-->
			<div class="input_box"> 
				<select name="tingkat_sekolah" >
					
					<?php foreach($tingkat_sekolah->result() as $row){
					
					if ($sekolah->kode_tingkat_sekolah == $row->kode)
							{
								echo '<option  value="'.$row->id.'" selected="selected">'.$row->tingkat.'</option>';
							}
							else
							{
								echo '<option  value="'.$row->id.'">'.$row->tingkat.'</option>';
							}
					
					
					}
					
					?>
					
					
					
					
				</select>
				<span class="required">*<?php echo form_error('tingkat_sekolah'); ?></span>
			</div>
				
				<div class="xlabel">
							<label for="tingkat_sekolah">Tingkat Sekolah</label>
				</div>
			<!-- End --> 
			
			
			 <!--Start-->
			<div class="input_box"> 
				<select name="status" id="statuss">
					
					<?php foreach($status->result() as $row){
					
					if ($sekolah->id_status == $row->id)
							{
								echo '<option  value="'.$row->id.'" selected="selected">'.$row->status.'</option>';
							}
							else
							{
								echo '<option  value="'.$row->id.'">'.$row->status.'</option>';
							}
					
					}
					
					?>
					
					
					
					
				</select>
				<span class="required">*<?php echo form_error('status'); ?></span>
			</div>
				
				<div class="xlabel">
							<label for="status">Status</label>
				</div>
			
			<!-- End --> 
			
			 <!--Start-->
			<div class="input_box"> 
				<select name="status_mutu" id="status_mutus">
					
					<?php foreach($status_mutu->result() as $row){
					
					if ($sta_mutu->id_status_mutu == $row->id)
							{
								echo '<option  value="'.$row->id.'" selected="selected">'.$row->status_mutu.'</option>';
							}
							else
							{
								echo '<option  value="'.$row->id.'">'.$row->status_mutu.'</option>';
							}
					
					}
					
					?>
					
					
					
					
				</select>
				<span class="required">*<?php echo form_error('status_mutu'); ?></span>
			</div>
				
				<div class="xlabel">
							<label for="status_mutu">Status Mutu</label>
				</div>
			
			<!-- End --> 
			
			<!-- End -->  
			
			</fieldset>
			
			<fieldset id="field_id">
			<legend>Kode Identifikasi Sekolah </legend>
			
			
				<!--Start-->
			
			<div class="input_box"> 
					<?php // Change the values in this array to populate your dropdown as required ?>
				
				<input type="text" name="nss" value="<?php echo set_value('nss',$sekolah->nss); ?>" id ="nss"/>
				<span class="required">*<?php echo form_error('nss'); ?></span>
			</div>
				
				<div class="xlabel">
							<label for="nss">Nomor Statistik Sekolah (NSS)</label>
				</div>
			
			<!-- End -->  
			
			<!--Start-->
			
			<div class="input_box"> 
					<?php // Change the values in this array to populate your dropdown as required ?>
				
				<input type="text" name="npsn" value="<?php echo set_value('npsn'); ?>" />
				<span class="required">*<?php echo form_error('npsn'); ?></span>
			</div>
				
				<div class="xlabel">
							<label for="npsn">Nomor Pokok Sekolah Nasional (NPSN)</label>
				</div>
			
			<!-- End --> 
	
			
			
			<!--Start-->
			
			<div class="input_box"> 
					<?php // Change the values in this array to populate your dropdown as required ?>
				
				<input type="text" name="nis" id ="nis" value="<?php echo set_value('nis',$sekolah->nis); ?>" />
				<span class="required">*<?php echo form_error('nis'); ?></span>
			</div>
				
				<div class="xlabel">
							<label for="nis">Nomor Induk Sekolah (NIS)</label>
				</div>
			
			<!-- End --> 
			
			
			
			<!--Start-->
			
			<div class="input_box"> 
			
			<input type="text" name="sk_pendirian" id="sk_pendirian" value="<?php echo set_value('sk_pendirian'); ?>" />
			<span class="required">* <?php echo form_error('sk_pendirian'); ?></span>
			</div>
			
			<div class="xlabel">
				<label for="sk_pendirian">SK Pendirian</label>
			</div>
			
			<!-- End --> 
			
			
			
			
			
			</fieldset>
			
			<fieldset id ="field_alamat">

			<legend> Alamat Sekolah </legend>
			
			
			
					 <!--Start-->
					
					<div class="input_box"> 
					
					<input type="text" name="jalan" value="<?php echo set_value('jalan'); ?>" />
					<span class="required">* <?php echo form_error('jalan'); ?></span>
					</div>
					
					<div class="xlabel">
						<label for="jalan">Jalan </label>
					</div>
					
					<!-- End -->  
					
					
					 <!--Start-->
					
					<div class="input_box"> 
					
					<input type="text" name="kelurahan" value="<?php echo set_value('kelurahan'); ?>" />
					<span class="required">* <?php echo form_error('kelurahan'); ?></span>
					</div>
					
					<div class="xlabel">
						<label for="kelurahan">Kelurahan </label>
					</div>
					
					<!-- End --> 
					
					 <!--Start-->
					
					<div class="input_box"> 
					
					<input type="text" name="kecamatan" value="<?php echo set_value('kecamatan'); ?>" />
					<span class="required">* <?php echo form_error('kecamatan'); ?></span>
					</div>
					
					<div class="xlabel">
						<label for="kecamatan">Kecamatan </label>
					</div>
					
					<!-- End --> 
					
					 <!--Start-->
					
					<div class="input_box"> 
					
					<input type="text" name="kab_kota" value="<?php echo set_value('kab_kota'); ?>" />
					<span class="required">* <?php echo form_error('kab_kota'); ?></span>
					</div>
					
					<div class="xlabel">
						<label for="kab_kota">Kabupaten/Kota </label>
					</div>
					
					<!-- End --> 
					
					<!--Start-->
					
					<div class="input_box"> 
					
					<input type="text" name="kodepos" id="kodepos" value="<?php echo set_value('kodepos'); ?>" />
					<span class="required">* <?php echo form_error('kodepos'); ?></span>
					</div>
					
					<div class="xlabel">
						<label for="kodepos">Kodepos </label>
					</div>
					
					<!-- End --> 
					
				
			
			</fieldset>
			 <!--Start-->
			
			<fieldset id ="field_peta">
			<legend> Kode Peta -  DMS (Degrees, Minutes, Seconds)</legend>
			
				<!--Start-->
				
				<script type="text/javascript">
				$(document).ready(function(){
					$(".north").click(function(){
					 $(".west").attr("checked", "checked");
					 });
					$(".west").click(function(){
					 $(".north").attr("checked", "checked");
					 });
						  
					$(".south").click(function(){
					$(".east").attr("checked", "checked");	  
					});
					
					$(".east").click(function(){
					$(".south").attr("checked", "checked");	  
					});
			
			
			
				});
				</script>
					<div class="input_box"> 
					
						<input type="text" id="lat_degrees" name="lat_degrees" value="<?php echo set_value('lat_degrees'); ?>" /> <span id="degrees"> &#176 </span> 	
						<input type="text" id="lat_minutes" name="lat_minutes" value="<?php echo set_value('lat_minutes'); ?>" /><span id="degrees"> ' <i></span> 
						<input type="text" id="lat_second" name="lat_second" value="<?php echo set_value('lat_second'); ?>" /><span id="degrees"> " <i></span> 
						 
						<input id="radio" type="radio" name="radio_latitude" class ="north" value="N"  <?php echo set_radio('radio_latitude', 'N'); ?>/> <span class = "radio_latitude"> North </span>
						<input id="radio" type="radio" name="radio_latitude" class ="south" value="S"  <?php echo set_radio('radio_latitude', 'S' ); ?>/>  <span class = "radio_latitude"> South</span>
						
						<span class="required">*
						<?php echo form_error('lat_degrees'); ?>
						<?php echo form_error('lat_minutes'); ?>
						<?php echo form_error('lat_second'); ?>
						<?php echo form_error('radio_latitude'); ?>
										
						</span>
					</div>
					
					<div class="xlabel">
						<label for="latitude">Latitude </label>
						</br>
						<i>(Degrees, Minutes, Seconds, North/South) </i>
					</div>
					
					<!-- End --> 
					
					
					<!--Start-->
					
					<div class="input_box"> 
					
						<input type="text" id="long_degrees" name="long_degrees" value=" <?php echo set_value('long_degrees'); ?>" /> <span id="degrees"> &#176 </span> 	
						<input type="text" id="long_minutes" name="long_minutes" value="<?php echo set_value('long_minutes'); ?>" /><span id="degrees"> ' <i></span> 
						<input type="text" id="long_second" name="long_second" value="<?php echo set_value('long_second'); ?>" /><span id="degrees"> " <i></span> 
						 
						<input id="radio" type="radio" name="radio_longitude" class="west" value="W" <?php echo set_radio('radio_longitude', 'W' ); ?>/> <span class = "radio_latitude"> West </span>
						<input id="radio" type="radio" name="radio_longitude" class="east" value="E" <?php echo set_radio('radio_longitude', 'E' ); ?> />  <span class = "radio_latitude"> East</span>
						<span class="required">*
						<?php echo form_error('long_degrees'); ?>
						<?php echo form_error('long_minutes'); ?>
						<?php echo form_error('long_second'); ?>
						<?php echo form_error('radio_longitude'); ?>
										
						</span>
					</div>
					
					<div class="xlabel">
						<label for="longitude">Longitude </label>
						</br>
						<i>(Degrees, Minutes, Seconds, West/East) </i>
					</div>
					
					<!-- End --> 
			
			
			</fieldset>
			
			<fieldset id="field_kontak">
			<legend> Kontak Sekolah </legend>
		 
						
			
			 <!--Start-->
			
			<div class="input_box"> 
			
			<input type="text" name="telp" id="telp" value="<?php echo set_value('telp'); ?>" />
			<span class="required">* <?php echo form_error('telp'); ?></span>
			</div>
			
			<div class="xlabel">
				<label for="telp">Telpon 1 </label>
			</div>
			
			<!-- End --> 
			
			<!--Start-->
			
			<div class="input_box"> 
			
			<input type="text" name="telp2"  id="telp2" value="<?php echo set_value('telp2'); ?>" />
			<span class="required">* <?php echo form_error('telp2'); ?></span>
			</div>
			
			<div class="xlabel">
				<label for="telp2">Telpon 2</label>
			</div>
			
			<!-- End --> 
			
			<!--Start-->
			
			<div class="input_box"> 
			
			<input type="text" name="fax"  id="fax" value="<?php echo set_value('fax'); ?>" />
			<span class="required">* <?php echo form_error('fax'); ?></span>
			</div>
			
			<div class="xlabel">
				<label for="fax">Faximile</label>
			</div>
			
			<!-- End --> 
			
			
			
			<!--Start-->
			
			<div class="input_box"> 
			
			<input type="text" name="email" value="<?php echo set_value('email'); ?>" />
			<span class="required">* <?php echo form_error('email'); ?></span>
			</div>
			
			<div class="xlabel">
				<label for="email">Email</label>
			</div>
			
			<!-- End --> 
			
			
			
			
			</fieldset>
			
			<fieldset>
			
			<div class="button_x"> 
			<?php echo form_submit( 'submit', 'Submit','class="button medium blue"');?>
		
			</div>		
			
			
			
		
			</form>

			
			</fieldset>	