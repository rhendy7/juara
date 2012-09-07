<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" SYSTEM "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>

<title><?php $title; ?></title>

<link rel="alternate" type="application/rss+xml" title="Web Development Blog RSS Feed" href="http://www.scriptiny.com/feed/">

<link rel="shortcut icon" href="images/favicon0.ico">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<?php 

$this->load->helper('html');
$screen = array(
           'href' => 'application/dinas/views/templates/default/css/screen.css',
           'rel' => 'stylesheet',
           'type' => 'text/css',
           'media' => 'screen, projection'
 );

$print = array(
           'href' => 'application/dinas/views/templates/default/css/print.css',
           'rel' => 'stylesheet',
           'type' => 'text/css',
           'media' => 'print'
 ); 
 
 $style = array(
           'href' => 'application/dinas/views/templates/default/css/style.css',
           'rel' => 'stylesheet',
           'type' => 'text/css',
           'media' => 'screen, projection'
 );
 
 
 
 
 //bluetrip css framwork
  echo link_tag($screen); 
  echo link_tag($print); 
  echo link_tag($style); 








 
?>

<script type="text/javascript" src="<?php echo base_url();?>application/dinas/views/templates/default/js/tinydropdown.js"></script>

</head>
<body>





<div id="outer">

		<div id="center" class ="container">
			<div id="header" class="span-24">
			
			
				<div class = "span=5">
				<a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/default/images/logo0000.png" width="386" height="84" alt="Dinas Pendidikan Kota" id="logo"></a>
				</div>
				<div id="topnav" class="span-10">
				
					<ul>
						<li>Selamat Datang Guru Joni.....</li>
						<li>Logout</li>
						
					</ul>

					<form id="search" method="get" action="http://www.scriptiny.com/">
						<input type="text" name="s" id="s" value="search" onfocus="this.value=''">
					</form>
				</div>
				<div class="span-9 last">
								<h1 ><?php $content_title; ?></h1> <!--judul blog !-->
				</div>
			</div>
			
		

<div id="nav" class="span-24">
    <?php echo modules::run('top_nav'); ?>
</div>

			
			
			<div id="content" class="span-24">
			
			<div id="left" class="span-10">
					<?php echo modules::run('left_bar'); ?>
					
				</div>
			
			
			
			
			
			
				<div id="right" class="span-14 last">
				<div class="post">
								<div class="posttext">
									
									<?php echo $contents;?>
									<div class="details">
										<em>Posted by <a href="http://www.scriptiny.com/author/michael/" title="Posts by Michael" rel="author">Michael</a> in <a href="http://www.scriptiny.com/category/expressionengine/" title="View all posts in ExpressionEngine" rel="category tag">ExpressionEngine</a>, <a href="http://www.scriptiny.com/category/php/" title="View all posts in PHP" rel="category tag">PHP</a>  on December 1, 2011</em>
									</div>
								</div>
							
				</div>






				</div>
	
			</div>	
			
	
			
			</div>
	<div id="footer">
		<div id="footercenter">
			<span id="copyright">Template By Leigeber</span>
			<span id="footerlinks"><a href="http://www.scriptiny.com/">Homepage</a> | <a href="http://www.scriptiny.com/contact/">Contact</a> | <a href="http://www.scriptiny.com/archive/">Archive</a></span>
		</div>
	</div>
</div>

<script type="text/javascript">
var dropdown=new TINY.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>


</body>
</html>
<!-- This document saved from http://www.scriptiny.com/2011/12/introduction-expressionengine-review/ -->
