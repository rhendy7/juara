

<?php 

// $this->load->view('content/css'); 
    

$judul = array(
	'name'	=> 'judul',
	'id'	=> 'post_title',
	'value' => set_value('judul'),
	'tabindex' => '1',
	'size'	=> 30,
);

$text = array(
	'name'	=> 'isi',
	'id' => 'basic_ckeditor',
	'class' => 'basic_ckeditor',
	'value' => set_value('isi'),
	'cols'	=> 80,
	'rows'	=> 10,
);



?>



<?php //declare ckeditor ?>
<?php echo modules::run('templates/ckeditor'); ?>



<style>

label,#lab{display:block; font-size: 14px; margin-top: 15px; color: brown}



option#lab {color: brown}

</style>

		
<div id="postedit" class="clearfix">
			<h2 class="ico_mug">Tulis berita baru</h2>
			
			<?php echo validation_errors(); ?>
			
			<?php echo form_open('blog/tambah_berita'); ?>
			
			<div class="box_messages"> 
					<?php // Change the values in this array to populate your dropdown as required ?>
					
				<select name="kategori" id="kategori">
					<option value=""id="lab">Pilih Kategori</option>
					<?php
					
					foreach($kategori->result() as $row)
						{ 
							if ($kode_kat == $row->id)
							{
								echo '<option  value="'.$row->id.'" selected="selected">'.$row->nama.'</option>';
							}
							else
							{
								echo '<option  value="'.$row->id.'">'.$row->nama.'</option>';
							}
						}
					
											
					?>	
					<span class="required">*</span>
				</select>
			</div>
			
			 <label><strong>Judul</strong></label>
			<div><?php echo form_input($judul); ?></div>
			<div id="form_middle_cont" class="clearfix">
			 <label><strong>Isi Berita</strong></label>
			<div class="left"><?php echo form_textarea($text); ?></div>
			
			  

 <script>
	
CKEDITOR.replace( 'basic_ckeditor',
	{
		toolbar :[ { name: 'document', items : [ 'NewPage','Preview' ] },
		{ name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
		{ name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','Scayt' ] },
		{ name: 'insert', items : [ 'Image','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'
                 ] },
                '/',
		{ name: 'styles', items : [ 'Styles','Format' ] },
			{ name: 'colors', items : [ 'TextColor','BGColor' ] },
		{ name: 'basicstyles', items : [ 'Bold','Italic','Strike','-','RemoveFormat' ] },
		{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote' ] },
		{ name: 'links', items : [ 'Link','Unlink','Anchor' ] },
		{ name: 'tools', items : [ 'Maximize','-' ] } ]
	});
 
 </script>

			
			
			<div class="left form_sidebar">
				
				<h3>Tags,</h3>
			
				<input type="text"  name="kata_kunci" value="Kata kunci&hellip;"  onfocus="this.value=(this.value=='Kata kunci&hellip;')? '' : this.value ;" tabindex="2" />
				<p>
					<span id="status">Status: Automated saving... </span>
				<input type="submit" value="Preview" />
				<input type="submit" value="Save" id="save" />
				</p>
			</div>
			</div>
			</form>
			<div id="success" class="info_div"><span class="ico_success">Yeah! Success!</span></div>
			<div id="fail" class="info_div"><span class="ico_cancel">Ups, there was an error</span></div>		
			<div id="warning" class="info_div"><span class="ico_error">Ups, you miss something</span></div>	
		
		</div>

	<!-- end #dashboard -->
