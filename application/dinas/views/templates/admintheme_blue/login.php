<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AdminTheme - Ultimate Admin Panel Solution</title>
	<meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index,follow" />
	<!--[if IE]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection" /><![endif]-->
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
	<link rel="Stylesheet" type="text/css" href="css/smoothness/jquery-ui-1.7.1.custom.css"  />	
	
	
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
	
	
	
	
	<!--[if IE]>
		<style type="text/css">
		  .clearfix {
		    zoom: 1;     /* triggers hasLayout */
		    display: block;     /* resets display for IE/Win */
		    }  /* Only IE can see inside the conditional comment
		    and read this CSS rule. Don't ever use a normal HTML
		    comment inside the CC or it will close prematurely. */
		</style>
	<![endif]-->
	<!-- JavaScript -->
   <?php echo modules::run('templates/jquery'); ?>
	</head>
	 <!--[if IE]><script language="javascript" type="text/javascript" src="excanvas.pack.js"></script><![endif]-->
</head>
<body>
<div  id="login_container">
    <div  id="header">
   
		<div id="logo"><h1><a href="/">AdmintTheme</a></h1></div>
		
    </div><!-- end header -->
	   
	    <div id="login" class="section">

	    	<?php echo $contents;?>
			
		
	    </div>
	
	    
		    


</div><!-- end container -->

</body>
</html>
