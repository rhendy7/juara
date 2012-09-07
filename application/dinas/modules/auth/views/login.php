<h1>Login</h1>
<p>Please login with your email/username and password below.</p>
	
<div id="infoMessage"></div>


  	
  <p>
    <label for="identity"></label>
    
  </p>

  <p>
    <label for="password">:</label>
   
  </p>

  <p>
    <label for="remember">Remember Me:</label>
   
  </p>
    
    
  <p><?php echo form_submit('submit', 'Login');?></p>
    


<p><a href="forgot_password">Forgot your password?</a></p>





		<?php if(validation_errors()== TRUE) { ?>
  
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