<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php echo modules::run('templates'); ?>
<?php echo modules::run('templates/jquery'); ?>




<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
			<p>Welcome <strong><?php echo $user->email; ?></strong>.<?php echo anchor('/auth/logout/', 'Logout'); ?></p>
			<p>System messages: 3.<a href="#">Read?</a></p>
			<p class="last_login">Last login: 21:03 12.05.2009</p>
			
		</div>
		
		<div id="logo"><h1><a href="/">AdmintTheme</a></h1></div>
		
    </div><!-- end header -->
	    <div id="content" >
	   
	   <?php echo modules::run('top_nav'); ?>
	   
	   
		<div id="content_main" class="clearfix">
		
		<!-- show Flash Messages here -->
		<div id="<?php echo $this->session->flashdata('div'); //untuk menunjukkan pesan?>" class="info_div">
		<?php echo $this->session->flashdata('msg'); ?>
		</div>
		
		
		
		
			<div id="main_panel_container" class="left">
			
			
			<?php echo $contents; ?>
			
			
			<?php echo modules::run('panel'); ?>
			<!-- end #shortcuts -->
			</div>
			
			<?php echo modules::run('side_nav'); ?>
			
			
		</div><!-- end #content_main -->
		<div id="postedit" class="clearfix">
			<h2 class="ico_mug">Add new post</h2>
			<form action="post">
			<div><input id="post_title" type="text" size="30" tabindex="1" value="Type title" /></div>
			<div id="form_middle_cont" class="clearfix">
			<div class="left"><textarea id="markItUp" cols="80" rows="10"></textarea></div>
			<div class="left form_sidebar">
				<h3>Category: </h3>
				<ul>
					<li><label><input type="checkbox" class="noborder" name="chbox"  />First category</label></li>
					<li><label><input type="checkbox" class="noborder" name="chbox"  />Second category</label></li>
					<li>
						<ul>
						<li><label><input type="checkbox" class="noborder" name="chbox"  />Subcategory</label></li>
						<li><label><input type="checkbox" class="noborder" name="chbox"  />Subcategory</label></li>
						</ul>
					</li>
					<li><label><input type="checkbox" class="noborder" name="chbox"  />Third category</label></li>
				</ul>
				<h3>Tags,</h3>
			
				<input type="text" value="Short" tabindex="2" />
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
		
		</div><!-- end #postedit -->
		
		<div id="tabledata" class="section">
			<h2 class="ico_mug">Table data</h2>
		<table id="table">
			<thead>
			<tr>
				<th><input type="checkbox" class="noborder" /></th>
				<th>Date </th>
				<th>Title</th>
				<th>Category</th>
				<th>Actions</th>
				<th>Status</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td class="table_check"><input type="checkbox" class="noborder" /></td>
				<td class="table_date">April 23, 2009</td>
				<td class="table_title"><a href="#">Something like post </a></td>
				<td><a href="#">Webdesign, Life, Custom</a></td>
				<td><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/accept.jpg" alt="accepted"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/cancel.jpg" alt="cancel"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/folder.jpg" alt="folder"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/edit.jpg" alt="edit"/></a></td>
				<td><span class="approved">Approved</span></td>
			</tr>
			<tr>
				<td class="table_check"><input type="checkbox" class="noborder" /></td>
				<td class="table_date">April 22, 2009</td>
				<td class="table_title"><a href="#">Another thing </a></td>
				<td><a href="#">Webdesign, Life, Custom</a></td>
				<td><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/accept.jpg" alt="accepted"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/cancel.jpg" alt="cancel"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/folder.jpg" alt="folder"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/edit.jpg" alt="edit"/></a></td>
				<td><span class="approved">Approved</span></td>
			</tr>
			<tr>
				<td class="table_check"><input type="checkbox" class="noborder" /></td>
				<td class="table_date">April 21, 2009</td>
				<td class="table_title"><a href="#">And this is also a post </a></td>
				<td><a href="#">Webdesign, Life, Custom</a></td>
				<td><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/accept.jpg" alt="accepted"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/cancel.jpg" alt="cancel"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/folder.jpg" alt="folder"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/edit.jpg" alt="edit"/></a></td>
				<td><span class="ico_pending">Pending</span></td>
			</tr>
			<tr>
				<td class="table_check"><input type="checkbox" class="noborder" /></td>
				<td class="table_date">April 21, 2009</td>
				<td class="table_title"><a href="#">And this is also a post </a></td>
				<td><a href="#">Webdesign, Life, Custom</a></td>
				<td><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/accept.jpg" alt="accepted"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/cancel.jpg" alt="cancel"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/folder.jpg" alt="folder"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/edit.jpg" alt="edit"/></a></td>
				<td><span class="ico_pending">Pending</span></td>
			</tr>
			<tr>
				<td class="table_check"><input type="checkbox" class="noborder"  /></td>
				<td class="table_date">April 21, 2009</td>
				<td class="table_title"><a href="#">And this is also a post </a></td>
				<td><a href="#">Webdesign, Life, Custom</a></td>
				<td><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/accept.jpg" alt="accepted"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/cancel.jpg" alt="cancel"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/folder.jpg" alt="folder"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/edit.jpg" alt="edit"/></a></td>
				<td><span class="ico_pending">Pending</span></td>
			</tr>
			<tr>
				<td class="table_check"><input type="checkbox" class="noborder"  /></td>
				<td class="table_date">April 21, 2009</td>
				<td class="table_title"><a href="#">And this is also a post </a></td>
				<td><a href="#">Webdesign, Life, Custom</a></td>
				<td><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/accept.jpg" alt="accepted"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/cancel.jpg" alt="cancel"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/folder.jpg" alt="folder"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/edit.jpg" alt="edit"/></a></td>
				<td><span class="ico_pending">Pending</span></td>
			</tr>
			</tbody>
		</table>
			<div id="table_options" class="clearfix">
				
				<ul>
					<li><a href="#">Select All</a></li>
					<li><a href="#">Select None</a></li>
					<li><label>	Action:<select id="kategoria" name="kategoria">
									<option value="1">Option 1</option> 
									<option value="2">Option 2</option> 
									<option value="3">Option 3</option> 
									<option value="4">Option 4</option> 
								</select>
				</label></li>
				</ul>
				
				
			</div>
			<div class="pagination">
				<span class="pages">Page 1 of 3&#8201;</span>
				<span class="current">1</span>
				<a href="#" title="2">2</a>
				<a href="#" title="3">3</a>
				<a href="#" >&raquo;</a>
			</div>
		</div> <!-- end #tabledata -->
		<div class="section">
			
		<h1>Header h1</h1>
		<h2>Header h2</h2>
		<h3>Header h3</h3>
		<h4>Header h4</h4>
		<h5>Header h5</h5>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">Nam sapien dolor</a>, ultrices a rutrum quis, convallis nec nisi. <del>Morbi lorem est</del>, pellentesque ac suscipit ut, fringilla sit amet elit. Cras blandit turpis vitae augue laoreet gravida. Suspendisse potenti. Nullam vitae dui quam. Cras fringilla tincidunt metus venenatis suscipit. Vestibulum feugiat felis tincidunt felis fermentum fringilla. In a ante metus. Nullam consequat hendrerit orci quis volutpat. Etiam a libero nunc. Sed convallis suscipit lectus quis hendrerit. Aliquam et elementum risus. Proin at feugiat lacus. Suspendisse non odio ante, et porta turpis. Integer bibendum augue at nisi porta vel luctus nisl fringilla. Donec in libero erat.</p>
		<ul>
			<li>Element of unordered list</li>
			<li>Element of unordered list</li>
			<li>Element of unordered list</li>
		</ul>
		<ol>
			<li>Element of ordered list</li>
			<li>Element of ordered list</li>
			<li>Element of ordered list</li>
		</ol>	
		<p class="info">Info paragraph. That's <em>em</em> and here is <strong>strong</strong>. And some <small>small text</small></p>	
		<hr />
		
		<form action="post" method="post" accept-charset="utf-8">
			<fieldset>
				<legend><span>Internet Browsers</span></legend>
				  <input type="radio" name="browser" class="noborder" />Internet Explorer<br />
				  <input type="radio" name="browser" class="noborder" />Netscape Navigator<br />
				  <input type="radio" name="browser" class="noborder" />Opera
				  <br />  <br />
		  	  <label><input type="text" value="Short" /></label> 
			  <label><input type="text" value="Medium" size="60" /></label> 
			  <label><input type="text" value="Long" size="90" /></label> 
					
			  <br /> <input type="submit" value="Continue" />
			  <br />  <button>This is a button</button>
			  
 		</fieldset>
			
		</form>
			<div id="tabs">
				<ul>
					<li><a href="#tabs-1">First</a></li>
					<li><a href="#tabs-2">Second</a></li>

					<li><a href="#tabs-3">Third</a></li>
				</ul>
				<div id="tabs-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
				<div id="tabs-2">Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet ornare, felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum.</div>
				<div id="tabs-3">Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.</div>
			</div>

		</div><!-- end #section -->
		
		<div id="panels" class="clearfix">
			<div class="panel photo left">
				<h2 class="ico_mug">Photo gallery</h2>
				<ul class="clearfix">
					<li><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/photos/1.jpg" alt="photo"/><span><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/accept.jpg" alt="accept"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/cancel.jpg"  alt="deny"/></a></span></li>
					<li><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/photos/2.jpg" alt="photo"/><span><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/accept.jpg" alt="accept"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/cancel.jpg"  alt="deny"/></a></span></li>
					<li><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/photos/3.jpg" alt="photo"/><span><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/accept.jpg" alt="accept"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/cancel.jpg"  alt="deny"/></a></span></li>
					<li><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/photos/2.jpg" alt="photo"/><span><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/accept.jpg" alt="accept"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/cancel.jpg"  alt="deny"/></a></span></li>
					<li><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/photos/1.jpg" alt="photo"/><span><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/accept.jpg" alt="accept"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/cancel.jpg"  alt="deny"/></a></span></li>
					<li><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/photos/2.jpg" alt="photo"/><span><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/accept.jpg" alt="accept"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/cancel.jpg"  alt="deny"/></a></span></li>
					<li><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/photos/1.jpg" alt="photo"/><span><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/accept.jpg" alt="accept"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/cancel.jpg"  alt="deny"/></a></span></li>
					<li><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/photos/3.jpg" alt="photo"/><span><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/accept.jpg" alt="accept"/></a><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/admintheme_blue/img/cancel.jpg"  alt="deny"/></a></span></li>
				</ul>
				<button>Add photo</button>
			</div><!-- end #photo -->
			<div class="panel todo left">
				<h2 class="ico_mug">To do list</h2>
			<p>Things to do:</p>
			<ul>
				<li class="even"><input type="checkbox" class="noborder"  value="" name="check"/>
					Create more theme fot themeforest
					<span class="date">July 24, 2009</span>
				</li>
				<li class="odd"><input type="checkbox" class="noborder"  value="" name="check"/>
					Sell a looot fo themes
					<span class="date">July 24, 2009</span>
				</li>
				<li class="even"><input type="checkbox" class="noborder" value="" name="check"/>
					Learn ruby on rails
					<span class="date">July 24, 2009</span>
				</li>
				<li class="odd"><input type="checkbox" class="noborder" value="" name="check"/>
					Be a better man
					<span class="date">July 24, 2009</span>
				</li>
			</ul>
			<button>Add to do</button>
			</div><!-- end #todo -->
			<div class="panel calendar left">
				<h2 class="ico_mug">Callendar</h2>
				<div id="datepicker"></div>
				<button>Add event</button>
			</div><!-- end #calendar -->
		</div><!-- end #panels -->

	    </div><!-- end #content -->
		   
    <div  id="footer" class="clearfix">
    	<p class="left">AdminTheme - Ultimate Admin Panel Solution</p>
		<p class="right">© 2009 AdminTheme by rzepak, via Themeforest</p>
	</div><!-- end #footer -->
</div><!-- end container -->

</body>
</html>
