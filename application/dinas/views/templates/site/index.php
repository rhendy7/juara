<?php 

// $this->load->view('content/css'); 
       echo  modules::run('templates');
	  echo  modules::run('templates/jquery');
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>News Magazine</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="scripts/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.setup.js"></script>

<?php 

$this->load->helper('html');
$screen = array(
           'href' => 'application/dinas/views/templates/site/styles/layout.css',
           'rel' => 'stylesheet',
           'type' => 'text/css',
           'media' => 'screen, projection'
 );

$print = array(
           'href' => 'application/dinas/views/templates/site/css/print.css',
           'rel' => 'stylesheet',
           'type' => 'text/css',
           'media' => 'print'
 ); 
 

 
 
 
 

  echo link_tag($screen); 
 








 
?>


</head>
<body id="top">
<div class="wrapper col0">
  <div id="topline">
    
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper" id="wrapper_header">
  <div id="header">
    <div class="fl_left">
	  <div id ="header_symbol">
      <h1><strong>N</strong>ews <strong>M</strong>agazine</h1>
      <p>Free CSS Website Template</p>
	  </div>
    </div>
   
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul class="sf-menu2">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="style-demo.html">Style Demo</a></li>
        <li><a href="full-width.html">Full Width</a></li>
        <li><a href="#">DropDown</a>
          <ul>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
          </ul>
        </li>
        <li class="last"><a href="#">A Long Link Text</a></li>
      </ul>
    </div>
    <div id="search">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search Our Website&hellip;"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="Cari" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <div id="featured_slide">
	  <img src="<?php echo base_url();?>application/dinas/views/templates/site/images/map_demo.jpg" id="map_demo" alt="map_demo" />
		
      </div>
    </div>
    <div class="column">
      <ul class="latestnews">
        <li><img src="<?php echo base_url();?>application/dinas/views/templates/site/images/demo/100x100.gif" alt="" />
          <p><strong><a href="#">Indonectetus facilis leo.</a></strong> Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
        </li>
        <li><img src="<?php echo base_url();?>application/dinas/views/templates/site/images/demo/100x100.gif" alt="" />
          <p><strong><a href="#">Indonectetus facilis leo.</a></strong> Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
        </li>
        <li class="last"><img src="<?php echo base_url();?>application/dinas/views/templates/site/images/demo/100x100.gif" alt="" />
          <p><strong><a href="#">Indonectetus facilis leo.</a></strong> Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
        </li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="adblock">
    <div class="fl_left"><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/site/images/demo/468x60.gif" alt="" /></a></div>
    <div class="fl_right"><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/site/images/demo/468x60.gif" alt="" /></a></div>
    <br class="clear" />
  </div>
  <div id="hpage_cats">
    <div class="fl_left">
      <h2><a href="#">Environment &raquo;</a></h2>
      <img src="<?php echo base_url();?>application/dinas/views/templates/site/images/demo/100x100.gif" alt="" />
      <p><strong><a href="#">Indonectetus facilis leo.</a></strong></p>
      <p>This is a W3C standards compliant free website template from <a href="http://www.os-templates.com/">OS Templates</a>. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan sagittislaorem dolor sum at urna.</p>
    </div>
    <div class="fl_right">
      <h2><a href="#">Technology &raquo;</a></h2>
      <img src="<?php echo base_url();?>application/dinas/views/templates/site/images/demo/100x100.gif" alt="" />
      <p><strong><a href="#">Indonectetus facilis leo.</a></strong></p>
      <p>This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>, which allows you to use and modify the template for both personal and commercial use when you keep the provided credit links in the footer.</p>
    </div>
    <br class="clear" />
    <div class="fl_left">
      <h2><a href="#">Entertainment &raquo;</a></h2>
      <img src="<?php echo base_url();?>application/dinas/views/templates/site/images/demo/100x100.gif" alt="" />
      <p><strong><a href="#">Indonectetus facilis leo.</a></strong></p>
      <p>Morbitincidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anterdumnullam interdum eros dui urna consequam ac nisl nullam ligula vestassa. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan sagittislaorem dolor sum at urna.</p>
    </div>
    <div class="fl_right">
      <h2><a href="#">Politics &raquo;</a></h2>
      <img src="<?php echo base_url();?>application/dinas/views/templates/site/images/demo/100x100.gif" alt="" />
      <p><strong><a href="#">Indonectetus facilis leo.</a></strong></p>
      <p>Morbitincidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anterdumnullam interdum eros dui urna consequam ac nisl nullam ligula vestassa. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan sagittislaorem dolor sum at urna.</p>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <div id="hpage_latest">
        <h2>Feugiatrutrum rhoncus semper</h2>
        <ul>
          <li><img src="<?php echo base_url();?>application/dinas/views/templates/site/images/demo/190x130.gif" alt="" />
            <p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et.</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
          <li><img src="<?php echo base_url();?>application/dinas/views/templates/site/images/demo/190x130.gif" alt="" />
            <p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et.</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
          <li class="last"><img src="<?php echo base_url();?>application/dinas/views/templates/site/images/demo/190x130.gif" alt="" />
            <p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et.</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
        </ul>
        <br class="clear" />
      </div>
    </div>
    <div class="column">
      <div class="holder"><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/site/images/demo/300x250.gif" alt="" /></a></div>
      <div class="holder"><a href="#"><img src="<?php echo base_url();?>application/dinas/views/templates/site/images/demo/300x80.gif" alt="" /></a></div>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper" id="wrapper_footer">
  <div id="footer">
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox last">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="wrapper col8">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2011 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>
