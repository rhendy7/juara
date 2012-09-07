<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--


-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="<?php echo base_url(); ?>application/sekolah/views/templates/default/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="wrapper2">
		<div id="header">
			<div id="logo">
				<h1><?php echo $sekolah; ?></h1>
			</div>
			<div id="menu">
				<ul>
					<li><a href="#">Homepage</a></li>
					<li><a href="#">Gallery</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Resources</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>
		<!-- end #header -->
		<div id="page">
			<div id="content">
				
				<?php echo $contents; ?>
					
			</div>
			</div>
			<!-- end #content -->
			<div id="sidebar">
				<ul>
					<li id="search">
						<h3>Search</h3>
						<form id="searchform" method="get" action="">
							<div>
								<input type="text" name="s" id="s" size="15" />
								<br />
								<input name="submit" type="submit" value="Go" />
							</div>
						</form>
					</li>
					<li>
						<h3>Corat-coret siswa</h3>
						<p><strong>Morbi sit amet</strong> mauris Nam vitae nibh eu sapien dictum pharetra. Vestibulum elementum neque vel lacus. Proin auctor dolor loremmassa. Phasellus sit. <a href="#">More&hellip;</a></p>
					</li>
					<li>
						<h3>Berita Dinas</h3>
						<ul>
							<li><a href="#">Morbi sit amet sed magna</a></li>
							<li><a href="#">Lacus dapibus interdum</a></li>
							<li><a href="#">Donec pede nisl dolore sed</a></li>
							<li><a href="#">Lacus dapibus et interdum</a></li>
							<li><a href="#">Morbi sit amet magna  etiam</a></li>
							<li><a href="#">Maecenas sed sem lorem</a></li>
							<li><a href="#">Lacus dapibus interdum</a></li>
							<li><a href="#">Donec pede nisl dolore</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>
			<div id="widebar">
				<div id="colA">
					<h3>Volutpat Consequat</h3>
					<dl class="list1">
						<dt>12.17.2007</dt>
						<dd><a href="#">Praesent nonummy sed lorem</a></dd>
						<dt>12.13.2007</dt>
						<dd><a href="#">Mauris sagittis neque nec nisi sed</a></dd>
						<dt>12.05.2007</dt>
						<dd><a href="#">Vel turpis integer leo venenatis</a></dd>
						<dt>12.02.2007</dt>
						<dd><a href="#">Et pharetra quis sed viverra ante</a></dd>
						<dt>11.30.2007</dt>
						<dd><a href="#">Integer leo lorem sed lorem</a></dd>
					</dl>
				</div>
				<div id="colB">
					<h3>Pharetra Sed Tempus</h3>
					<p>Morbi sit amet mauris Nam vitae nibh eu sapien dictum pharetra. Vestibulum elementum neque vel lacus. Lorem ipsum dolor sit dolore phasellus pede lorem proin auctor dolor loremmassa phasellus sit. <a href="#">More&hellip;</a></p>
				</div>
				<div id="colC">
					<h3>Cerita Gambar</h3>
					<ul class="list2">
						<li><a href="#"><img src="images/img12.jpg" alt="" width="50" height="50" /></a></li>
						<li><a href="#"><img src="images/img13.jpg" alt="" width="50" height="50" /></a></li>
						<li class="nopad"><a href="#"><img src="images/img14.jpg" alt="" width="50" height="50" /></a></li>
						<li><a href="#"><img src="images/img15.jpg" alt="" width="50" height="50" /></a></li>
						<li><a href="#"><img src="images/img16.jpg" alt="" width="50" height="50" /></a></li>
						<li class="nopad"><a href="#"><img src="images/img17.jpg" alt="" width="50" height="50" /></a></li>
					</ul>
				</div>
				<div style="clear: both;">&nbsp;</div>
			</div>
			<!-- end #widebar -->
		</div>
		<!-- end #page -->
	</div>
	<!-- end #wrapper2 -->
	<div id="footer">
		<p>Juara </p>
	</div>
</div>
<!-- end #wrapper -->
</body>
</html>
