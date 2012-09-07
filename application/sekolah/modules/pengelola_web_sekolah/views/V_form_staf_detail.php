<?php 

// $this->load->view('content/css'); 
      echo  modules::run('templates');
	  echo  modules::run('templates/step_wizard');
	  echo  modules::run('templates/input_mask');
	  echo  modules::run('templates/modal_js');
?>

				
<script>
	$(document).ready(function(){
		
		var tampilkan = $("#tampil");
		var loading = $("#loading");
		loading.hide();
		
		$("#simpan_sekolah").click(function() {
		 
		  var nama_lemb_pendidikan = $("#nama_lemb_pendidikan").val();
		  var tingkat_pendidikan = $("#tingkat_pendidikan_x").val();
		  var tahun_lulus = $("#tahun_lulus").val();
		  var id_staf = $("#id_staf").val();
		  var kategori = $("#kategori_pendidikan_formal").val();
		  
		
		 loading.fadeIn();
		  
			$.ajax({
					type:"POST",
					url : "insert_staf_tingkat_pendidikan",
					data: "nama=" + nama_lemb_pendidikan + "&tahun_lulus=" + tahun_lulus + "&tingkat_pendidikan=" + tingkat_pendidikan + "&id_staf=" + id_staf + "&kategori=" + kategori, 
					success : function(data) {
					
					loading.fadeOut(2300);
					
					tampilkan.html(data);
					tampilkan.fadeIn(2300);
										 				
					}
					
					
					
					
					
				});
					
					
					
					
					
				});
			
		
	
	
	
	
	});


</script>
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

	



   

<script type="text/javascript">
	var txt = "<h3><u>Petunjuk.<span> upload Gambar Buku :</u></span></h3> </br><ul><li>Ekstensi foto harus JPG, JPEG,GIF,PNG</li><li> Maksimal ukuran file foto 60KB</li><li> Ukuran Gambar Maksimal Sekitar  7x9 Cm atau 491x627 pixel</li></ul></br> Contoh : (format gambar)</br><img src=<?php echo base_url()?>modules/templates/views/default/images/foto_thumb.gif>"
</script>

<div id ="step">

	<ul id="mainNav" class="threeStep">
		<li class="current"><?php echo anchor('pengelola_web_sekolah/form_profil_sekolah1', '<em>Langkah 1: Profil Sekolah</em>','title'); ?></li><span id="done"></span>
		<li class="current"><?php echo anchor('pengelola_web_sekolah/form_staf_detail1', '<em>Langkah 2: Profil Pengelola</em>','title'); ?></li><span id="ujung"></span>
		<li><?php echo anchor('pengelola_web_sekolah/form_konfirmasi', '<em>Langkah 3: Konfirmasi</em>','title'); ?></li>
	</ul>
</div>	
	<div class="clearfloat">&nbsp;</div>


<?php // for validation messages box ?>
<?php if($this->uri->uri_string() != "pengelola_web_sekolah/form_staf_detail1") { ?>
	<div class="error_msg"> <p> Isian anda ada yang perlu diperbaiki, mohon periksa kembali isian dibawah ini </p> </div>
<?php } ?>

		
		<fieldset id="field_profil" >
		<legend>Profil Sekolah </legend>
			<!-- Php Form  -->			
			
			<?php echo form_open($post); ?>
			
			
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
				<select name="tingkat_sekolah" disabled >
					
					<?php foreach($tingkat_sekolah->result() as $row){
					
					if ($sekolah->kode_tingkat_sekolah == $row->kode)
							{
								echo '<option  value="'.$row->id.'" selected="selected">'.$row->nama.'</option>';
							}
							else
							{
								echo '<option  value="'.$row->id.'">'.$row->nama.'</option>';
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
				<select name="status" id="statuss" disabled>
					
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
			
			
			
			<!-- End -->  
			
			</fieldset>
			
			<fieldset id="field_id">
			<legend>Informasi umum </legend>
			
			
				<!--Start-->
			
			<div class="input_box"> 
					<?php // Change the values in this array to populate your dropdown as required ?>
				
				<input type="text" name="nama" value="<?php echo set_value('nama',$pengelola->nama); ?>" id ="nama"/>
				<span class="required">*<?php echo form_error('nama'); ?></span>
			</div>
				
				<div class="xlabel">
							<label for="nss">Nama Pengelola</label>
				</div>
			
			<!-- End -->  
			
				<!--Start-->
			
			<div class="input_box"> 
					<?php // Change the values in this array to populate your dropdown as required ?>
				
				<input type="text" name="nip" value="<?php echo set_value('nip',$pengelola->nip); ?>" id ="nip"/>
				<span class="required">*<?php echo form_error('nip'); ?></span>
			</div>
				
				<div class="xlabel">
							<label for="nss">NIP</label>
				</div>
			
			<!-- End -->  
			
			
			
			<!--Start-->
			
			<div class="input_box"> 
					<?php // Change the values in this array to populate your dropdown as required ?>
				
				<input type="text" name="tempat_lahir" value="<?php echo set_value('tempat_lahir',$pengelola->tanggal_lahir); ?>" /> 
				<span class="required">*<?php echo form_error('tempat_lahir'); ?></span>
			</div>
				
				<div class="xlabel">
							<label for="tempat_lahir">Tempat Lahir</label>
				</div>
			
			<!-- End --> 
			
			
			
			<!--Start-->
			
			<div class="input_box"> 
					<?php // Change the values in this array to populate your dropdown as required ?>
				
				<input type="text" name="tanggal_lahir" id ="tanggal_lahir" value="<?php echo set_value('tanggal_lahir',$pengelola->tanggal_lahir); ?>" />
				<span class="required">*<?php echo form_error('tanggal_lahir'); ?></span>
			</div>
				
				<div class="xlabel">
							<label for="tanggal_lahir">Tanggal Lahir</label>
				</div>
			
			<!-- End --> 
			
			
			
			<!--Start-->
			
			<div class="input_box"> 
			
			<input type="text" name="agama" id="agama" value="<?php echo set_value('agama'); ?>" />
			<span class="required">* <?php echo form_error('agama'); ?></span>
			</div>
			
			<div class="xlabel">
				<label for="agama">Agama</label>
			</div>
			
			<!-- End --> 
			
			<!--Start-->
				
					<div class="input_box"> 
				
					<?php echo form_error('jenis_kelamin'); ?>
						<input id="radio" type="radio" name="jenis_kelamin" value="L"  <?php echo set_radio('jenis_kelamin','L'); ?> /> <label> Laki-laki </label>
						<input id="radio" type="radio" name="jenis_kelamin"  value="P" <?php echo set_radio('jenis_kelamin','P');?>  /> <label> Perempuan </label>
						
					</div>
					
					
					<div class="xlabel">
						<label for="jk">Jenis Kelamin</label>
					</div>
					
				<!-- End --> 
			
			
			
			
			
			
			
			
					 <!--Start-->
					
					<div class="input_box"> 
					
					<select name="jabatan" >
					
					<?php 
					foreach($jabatan->result() as $row){
					    	echo '<option  value="'.$row->id.'">'.$row->jabatan.'</option>';
								
					}
					
					?>
					</select>
					<span class="required">* <?php echo form_error('jabatan'); ?></span>
					</div>
					
					<div class="xlabel">
						<label for="jabatan">Jabatan </label>
					</div>
					
					<!-- End -->  
					
					
					
					<!--Start-->
					<div class="input_box"> 
					 
				   <?php echo form_error('foto'); ?>
					<form>
					<input type="file" height="65" id="foto" name="foto"  value=""/><p> 
					<a href=# onclick="$.prompt(txt)" color=red> Petunjuk Upload Gambar</a>
					
					
					</div>
					
					
					<div class="xlabel">
						<label for="foto">foto</label>
					</div>
						
				<!-- End -->  
					
					 <!--Start-->
					
					<div class="input_box"> 
					
					<select name="golongan" >
					
					<?php 
					foreach($golongan->result() as $row){
					    	echo '<option  value="'.$row->id.'">'.$row->golongan_ruang.'</option>';
								
					}
					
					?>
					</select>
					<span class="required">* <?php echo form_error('golongan'); ?></span>
					</div>
					
					<div class="xlabel">
						<label for="golongan">Golongan/Ruang </label>
					</div>
					
					<!-- End --> 
					
					 <!--Start-->
					
					<div class="input_box"> 
					
					<input type="text" name="tgl_sk_pns" value="<?php echo set_value('tgl_sk_pns'); ?>" />
					<span class="required">* <?php echo form_error('tgl_sk_pns'); ?></span>
					</div>
					
					<div class="xlabel">
						<label for="tgl_sk_pns">Tanggal SK PNS </label>
					</div>
					
					<!-- End --> 
					
					<!--Start-->
					
					<div class="input_box"> 
					
					<input type="text" name="tgl_skp" id="tgl_sk_skp" value="<?php echo set_value('tgl_skp'); ?>" />
					<span class="required">* <?php echo form_error('tgl_skp'); ?></span>
					</div>
					
					<div class="xlabel">
						<label for="tgl_skp">Tanggal SKP</label>
					</div>
					
					<!-- End --> 
					
				
			
			</fieldset>
			 <!--Start-->
			
			<fieldset id ="tingkat_pendidikan">
			<legend>Pendidikan dan Pelatihan</legend>
			
				<!--Start-->
				<!--id_staf-->
				<input type="hidden" value="<?php echo $pengelola->id_staf;?>" id="id_staf"/> </input>	
				<input type="hidden" value="formal" id="kategori_pendidikan_formal"/> </input>	
			
				<div class="wide_input">
				<div id="tingkat_sekolah_form">
					<div class="float_left">
					<label> Nama Lembaga Pendidikan </label></br>
					<input type="text" id="nama_lemb_pendidikan" name="nama_lemb_pendidikan" value=""/>			
					
					
					</div>
				
				
					<div class="float_left">
					<label> Tingkat Pendidikan </label></br>
						 
						
							<select name="tingkat_pendidikan" id="tingkat_pendidikan_x" >
							<?php foreach($tingkat_pendidikan->result() as $row){
									echo '<option  value="'.$row->id.'">'.$row->tingkat_pendidikan.'</option>';
								}
							
							?>
							</select>
					</div>
					<div class="float_left">
					<label> Tahun Lulus </label></br>
					 
					
						<select name="tahun_lulus" id="tahun_lulus" >
						<option value="0">Tahun...</option>
							<?php $tahun = date('Y'); 
								  $tahun_mulai = $tahun - 20; 
							?>
							<?php for($i = $tahun; $i >= $tahun_mulai; $i--) {  ?>
							<option value="<?php echo $i ?>"><?php echo $i;?></option>
							<?php } ?>
						</select>	
					</div>	
				
					
					</div>
					
				
							

					
					<div id = "float_left" style="padding-top:17px;"> <div id="simpan_sekolah" class ="button medium green"> Simpan </div>
	
				</br>
				<span class="required">
						<?php echo form_error('nama_lemb_pendidikan'); ?>
						<?php echo form_error('tingkat_pendidikan'); ?>
						<?php echo form_error('tahun_lulus'); ?>
						<?php echo form_error('tingkat_pendidikan'); ?>
										
				</span>
				
				
				</div>

				<div id="ajax_data">
				<div id ="loading" class="wide_input" style="padding-left: 50%; clear:both; display:block;"> <img src="<?php echo base_url()?>application/sekolah/modules/templates/views/default/images/loading2.gif" /> </div>		
				



				</div>
					<div id="tampil"style="float:left; width: 80%"> </div>		
					
						
						
					
			
			
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