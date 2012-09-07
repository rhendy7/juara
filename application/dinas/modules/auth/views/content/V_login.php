



		<?php if($message != "") { ?>
  
	    	<div id="fail" class="info_div"><span class="ico_cancel"><?php echo $message;?></span></div>
	    <?php } ?>

		
			
			
			<?php echo form_open("auth/login");?>
			<label for="login"><strong>Email/Username</strong> </label><?php echo form_input($identity);?>
			<br />
			<label><strong>Password</strong></label> <?php echo form_input($password);?>
			<br />
			
	 

		
		
			<!-- Php Form  -->			
			
		
			
		

<strong>Remember Me</strong>	 <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
			
			<br />
		
			<input id="save" class="loginbutton" type="submit" class="submit" value="Log In" />
			
		
			
				
			
	
		
			
			
			
		
			
			
			
			<?php echo form_close();?>