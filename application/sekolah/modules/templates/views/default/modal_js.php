<?php 



$this->load->helper('html');
$link = array(
           'href' => 'application/sekolah/modules/templates/views/default/css/improptu.css',
           'rel' => 'stylesheet',
           'type' => 'text/css',
           'media' => 'all'
 );

 
 
 
 
 echo link_tag($link);  
  





 ?>
 <script type="text/javascript" src="<?php echo base_url();?>application/sekolah/modules/templates/views/default/js/improptu/common00.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>application/sekolah/modules/templates/views/default/js/improptu/jquery-impromptu.3.1.js"></script>