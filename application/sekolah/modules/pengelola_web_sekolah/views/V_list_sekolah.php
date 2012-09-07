<?php 

// $this->load->view('content/css'); 
      echo  modules::run('templates');
?>



<script>
	$(document).ready(function(){
	
		
		var tampilkan = $("#tampil");
		var loading = $("#loading");
		
		
		//to make refresh retrieve again the data.... tips :)
		 var id = $("#tingkat_sekolah").val();
		  loading.fadeIn();
		  tampilkan.hide();
		  
			$.ajax({
					type:"POST",
					url : "list_sekolah_ajax",
					data: "id=" + id,
					success : function(data) {
					
					loading.fadeOut(2300);
					
					tampilkan.html(data);
					tampilkan.fadeIn(2300);
										 				
					}
					
					
					
					
					
				});
		
		
		//f. menampilkan data
		loading.hide();
		// tampilkan.hide();
		// loading.fadein();
		$("#tingkat_sekolah").change(function() {
		  var id = $("#tingkat_sekolah").val();
		  loading.fadeIn();
		  tampilkan.hide();
		  
			$.ajax({
					type:"POST",
					url : "list_sekolah_ajax",
					data: "id=" + id,
					success : function(data) {
					
					loading.fadeOut(2300);
					
					tampilkan.html(data);
					tampilkan.fadeIn(2300);
										 				
					}
					
					
					
					
					
				});
			});
		
	
	
	
	
	});


</script>




		
		<fieldset >
		<legend>Tambah Sekolah </legend>
			<!-- Php Form  -->			
			
			<form>
			
			 <!--Start-->
			
			<div class="input_box"> 
					<?php // Change the values in this array to populate your dropdown as required ?>
				
				<select name="tingkat_sekolah" id="tingkat_sekolah">
					<option value="">Pilih Tingkat Sekolah</option>
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
						
			
			
			
		
			</form>

			
			</fieldset>	
			
	<div id="ajax_data">
	<div id ="loading"> <img src="<?php echo base_url()?>application/dinas/modules/templates/views/default/images/loading2.gif" /> </div>		
		<div id="tampil"> </div>



	</div>
			
			
			
			
			
	
			
			
			