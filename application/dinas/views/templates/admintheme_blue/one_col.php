<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">




<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php echo modules::run('templates'); ?>
<?php echo modules::run('templates/jquery'); ?>



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
	<meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index,follow" />
	

	 <!--[if IE]><script language="javascript" type="text/javascript" src="excanvas.pack.js"></script><![endif]-->
	 
	 	<?php 

$this->load->helper('html');
$screen = array(
           'href' => 'application/dinas/views/templates/admintheme_blue/css/style.css',
           'rel' => 'stylesheet',
           'type' => 'text/css',
           'media' => 'screen, projection'
 );

$print = array(
           'href' => 'application/dinas/views/templates/admintheme_blue/css/print.css',
           'rel' => 'stylesheet',
           'type' => 'text/css',
           'media' => 'print'
 ); 
 
 $style = array(
           'href' => 'application/dinas/views/templates/admintheme_blue/css/style.css',
           'rel' => 'stylesheet',
           'type' => 'text/css',
           'media' => 'screen, projection'
 );
 
 
 
 
 //bluetrip css framwork
  echo link_tag($screen); 
  echo link_tag($print); 
  echo link_tag($style); 








 
?>

	 
</head>
<body>



<div class="container" id="container">
    <div  id="header">
	
    	<div id="profile_info">
		
				<img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/avatar.jpg" id="avatar" alt="avatar" />
			<p>Welcome <strong><?php echo $this->tank_auth->get_username(); ?></strong>.<?php echo anchor('/auth/logout/', 'Logout'); ?></p>
			<p>System messages: 3.<a href="#">Read?</a></p>
			<p class="last_login">Last login: 21:03 12.05.2009</p>
			
		</div>
		
		<div id="logo"><h1><a href="/">AdmintTheme</a></h1></div>
		
    </div><!-- end header -->
	    <div id="content" >
	   
	   <?php echo modules::run('top_nav'); ?>
	   
	   
		<div id="content_main" class="clearfix">
			<div id="main_panel_container" class="left">
				
				<?php echo $contents; ?>
			
			</div>
			
			
			
		</div><!-- end #content_main -->
		
		<!-- end #content -->
		   
    <div  id="footer" class="clearfix">
    	<p class="left">AdminTheme - Ultimate Admin Panel Solution</p>
		<p class="right">© 2009 AdminTheme by rzepak, via Themeforest</p>
	</div><!-- end #footer -->
</div><!-- end container -->

</body>
</html>
