  <?php 



$this->load->helper('html');
$custom_js = array(
           'href' => 'application/dinas/modules/templates/views/default/css/smoothness/jquery-ui-1.7.1.custom.css',
           'rel' => 'stylesheet',
           'type' => 'text/css',
           'media' => 'all'
 );

 
 
 

 
 echo link_tag($custom_js);         




 ?>

 <script type="text/javascript" src="<?php echo base_url();?>application/dinas/modules/templates/views/default/js/jquery-1.7.1.min.js"></script>

 
  <script type="text/javascript" src="<?php echo base_url();?>application/dinas/modules/templates/views/default/js/js/superfish.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>application/dinas/modules/templates/views/default/js/js/hoverIntent.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>application/dinas/modules/templates/views/default/js/js/jquery-ui-1.7.1.custom.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>application/dinas/modules/templates/views/default/js/js/excanvas.pack.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>application/dinas/modules/templates/views/default/js/js/jquery.flot.pack.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>application/dinas/modules/templates/views/default/js/markitup/jquery.markitup.pack.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>application/dinas/modules/templates/views/default/js/markitup/sets/default/set.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>application/dinas/modules/templates/views/default/js/js/custom.js"></script>
 
 	<script type="text/javascript">
		// initialise plugins
		jQuery(function(){
			jQuery('ul.sf-menu').superfish();
		});

	</script>


 
 <script type="text/javascript" src="<?php echo base_url();?>application/dinas/modules/templates/views/default/js/jquery.cookie.js"></script>
 
 <script type="text/javascript" src="<?php echo base_url();?>application/dinas/modules/templates/views/default/js/js/flash_messages.js"></script>
 
 <script>
 
 $().ready(function(){
	$.ajaxSetup({
		error:function(x,e){
			if(x.status==0){
			alert('You are offline!!\n Please Check Your Network.');
			}else if(x.status==404){
			alert('Requested URL not found.');
			}else if(x.status==500){
			alert('Internel Server Error.');
			}else if(e=='parsererror'){
			alert('Error.\nParsing JSON Request failed.');
			}else if(e=='timeout'){
			alert('Request Time out.');
			}else {
			alert('Unknow Error.\n'+x.responseText);
			}
		}
	});
});

</script>



