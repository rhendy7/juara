<?php 

// $this->load->view('content/css'); 
      echo  modules::run('templates');
?>




<?php
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
	);
}
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>

<fieldset>
<legend>Tambah KPengelola Sekolah </legend>
<?php echo form_open($this->uri->uri_string()); ?>


	<?php if ($use_username) { ?>
	
	<!-- Start --> 
	<div class="input_box"> 
		<?php // Change the values in this array to populate your dropdown as required ?>
				
		<?php echo form_input($username); ?>
		<span class="required">*<?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?></span>
	</div>
				
	<div class="xlabel">
		<?php echo form_label('Username', $username['id']); ?>
	</div>
			
	<!-- End -->  
			
	
	
	
	
	
		
		
		
	
	<?php } ?>
	<?php echo form_hidden('id_sekolah', $id_sekolah); ?>
	<?php echo form_hidden('role_id', '2'); ?>
	
	
	<div class="input_box"> 
					<?php // Change the values in this array to populate your dropdown as required ?>
				
				<?php echo form_input($email); ?>
				<span class="required">*<?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?></span>
	</div>
				
	<div class="xlabel">
				<?php echo form_label('Email Address', $email['id']); ?>
	</div>
	
	<!-- Start --> 
	<div class="input_box"> 
		<?php // Change the values in this array to populate your dropdown as required ?>
				
		<?php echo form_password($password); ?>
		<span class="required">*<?php echo form_error($password['name']); ?></span>
	</div>
				
	<div class="xlabel">
		<?php echo form_label('Password', $password['id']); ?>
	</div>
			
	<!-- End -->  
	
	
	<!-- Start --> 
	<div class="input_box"> 
		<?php // Change the values in this array to populate your dropdown as required ?>
				
		<?php echo form_password($confirm_password); ?>
		<span class="required">*<?php echo form_error($confirm_password['name']); ?></span>
	</div>
				
	<div class="xlabel">
		<?php echo form_label('Confirm Password', $confirm_password['id']); ?>
	</div>
			
	<!-- End -->  	
	
	
	
	
	
		
		
		
	
	
		
		
		
	

	<?php if ($captcha_registration) {
		if ($use_recaptcha) { ?>
	
		<!-- Start --> 
	<div class="input_box"> 
		<div id="recaptcha_image"></div>
		<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
			<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
			<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
		
	
	
		
			<div class="recaptcha_only_if_image">Enter the words above</div>
			<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
		
		<input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />
		
		
		<span class="required">*<?php echo form_error('recaptcha_response_field'); ?></span>
		<?php echo $recaptcha_html; ?>
	</div>
				
	<div class="xlabel">
		<label> Recaptcha </label>
	</div>
			
	<!-- End -->  	
		
	


	
	<?php } else { ?>
	
	<!-- Start --> 
	<div class="input_box"> 
		<p>Enter the code exactly as it appears:</p>
		<?php echo $captcha_html; ?>
		<?php echo form_input($captcha); ?>
		<span class="required">*<?php echo form_error($captcha['name']); ?></span>
	</div>
				
	<div class="xlabel">
		<?php echo form_label('Confirmation Code', $captcha['id']); ?>
	</div>
			
	<!-- End -->  
	
		
			
			
		
	
	
		
		
		
	
	<?php }
	} ?>
	<div class="button"> 
			<?php echo form_submit( 'submit', 'Submit');?>
		
	</div>
<?php echo form_close(); ?>
</fieldset>
