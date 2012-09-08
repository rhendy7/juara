<?php 

// $this->load->view('content/css'); 
      echo  modules::run('templates');
	  echo  modules::run('templates/step_wizard');
	  echo  modules::run('templates/input_mask');
?>

	



<div id ="step">

	<ul id="mainNav" class="threeStep">
		<li class="current"><?php echo anchor('pengelola_web_sekolah/form_profil_sekolah', '<em>Langkah 1: Profil Sekolah</em>','title'); ?></li><span id="ujung"></span>
		<li><?php echo anchor('pengelola_web_sekolah/form_staf_detail1', '<em>Langkah 2: Profil Pengelola</em>','title'); ?></li>
		<li><?php echo anchor('pengelola_web_sekolah/form_konfirmasi', '<em>Langkah 3: Konfirmasi</em>','title'); ?></li>
	</ul>
</div>	
	<div class="clearfloat">&nbsp;</div>


<?php // for validation messages box ?>
<?php if($this->uri->uri_string() != "pengelola_web_sekolah/form_kordinat") { ?>
	<div class="error_msg"> <p>  </p> </div>
<?php } ?>

		
		<fieldset id="field_profil" >
		<legend>Profil Sekolah </legend>
			<!-- Php Form  -->			
			
			<?php echo form_open('pengelola_web_sekolah/form_kordinat'); ?>
			
			
			 <!--Start-->
			
			<div class="input_box"> 
			
			<input type="text" name="nama" value="<?php echo ucfirst($sekolah->nama); ?>" readonly class="readonly" />
			<span class="required">* <?php echo form_error('nama'); ?></span>
			</div>
			
			<div class="xlabel">
				<label for="nama">Nama Sekolah </label>
			</div>
			
			<!-- End -->  
		</fieldset>	
			
			
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
			
			<fieldset>
			
			<div class="button_x"> 
			<?php echo form_submit( 'submit', 'Submit','class="button medium blue"');?>
		
			</div>		
			
			
			
		
			</form>

			
			</fieldset>	