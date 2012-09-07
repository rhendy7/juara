<?php 

// $this->load->view('content/css'); 
      echo  modules::run('templates');

$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email atau Username';
} else if ($login_by_username) {
	$login_label = 'Username';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>








		
		<fieldset >
		<legend>Login form </legend>
			<!-- Php Form  -->			
			
			<?php echo form_open($this->uri->uri_string()); ?>
			
			
						
			 <!--Start-->
			
			<div class="input_box"> 
			
			<?php echo form_input($login); ?>
			<span class="required">* <?php echo form_error($login['name']); ?><?php echo isset($input_errors[$login['name']])?$input_errors[$login['name']]:''; ?></span>
			</div>
			
			<div class="xlabel">
				<label for="login"><?php echo form_label($login_label, $login['id']); ?> </label>
			</div>
			
			<!-- End -->  
			 <!--Start-->
			
			<div class="input_box"> 
			
			
			<input id="password" type="password" name="password" value="<?php echo set_value('password'); ?>"/>
			<span class="required">* <?php echo form_error('password'); ?></span>
		
			
			</div>
			
			<div class="xlabel">
				<label for="password">Password </label>
			</div>
			
			<!-- End -->
			
		
			<?php if ($show_captcha) {
		if ($use_recaptcha) { ?>
		
		<div class="input_box">
		
			<div id="recaptcha_image"></div>
		
		
			<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
			<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
			<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
		
	
	
		
			<div class="recaptcha_only_if_image">Enter the words above</div>
			<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
		
		<input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />
		<span style="color: red;"><?php echo form_input_error('recaptcha_response_field'); ?>
		<?php echo $recaptcha_html; ?>
	</div>
	<?php } else { ?>
	
	<div class="input_box">
		
			<p>Enter the code exactly as it appears:</p>
			<?php echo $captcha_html; ?>
		
	</div>
	
		<div class="input_box">
		
		<?php echo form_input($captcha); ?>
		<span class="required">* <?php echo form_error($captcha['name']); ?></span>
		
		</div>
		
		<div class="xlabel">
		<?php echo form_label('Confirmation Code', $captcha['id']); ?>
		</div>
	<?php }
	} ?>
		





			
			<!--Start-->
			
					<div class="input_box"> 
					
				   <?php echo form_error('bisa_dipinjam'); ?>
					
					<input id="bisa_dipinjam" type="checkbox" name="remember" class="checkbox" value="1"/> 	<label for="remember_me">Ingat Aku.... </label>
					</div>
					
					
						
				<!-- End --> 
			
			
			
			<div class="input_box">
											
			
			
			
			<?php echo anchor('/auth/forgot_password/', 'Forgot password'); ?>
			<?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Register'); ?>
			</div>	
	

			
			
			
			
			<div class="button"> 
			<?php echo form_submit( 'submit', 'Submit');?>
		
			</div>		
			
			
			
		
			</form>

			
			</fieldset>	