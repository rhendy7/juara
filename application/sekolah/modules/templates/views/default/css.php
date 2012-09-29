<?php 



$this->load->helper('html');
 $blog = array(
           'href' => 'application/sekolah/modules/templates/views/default/css/blog.css',
           'rel' => 'stylesheet',
           'type' => 'text/css',
           'media' => 'all'
 );
 
 

 $table = array(
           'href' => 'application/dinas/modules/templates/views/default/css/table.css',
           'rel' => 'stylesheet',
           'type' => 'text/css',
           'media' => 'all'
 );
 
 
  $markitup = array(
           'href' => 'application/dinas/modules/templates/views/default/js/markitup/skins/markitup/style.css',
           'rel' => 'stylesheet',
           'type' => 'text/css',
           'media' => 'all'
 );
 
 
 
  $markitup_set = array(
           'href' => 'application/dinas/modules/templates/views/default/js/markitup/sets/default/style.css',
           'rel' => 'stylesheet',
           'type' => 'text/css',
           'media' => 'all'
 );
 
  
  $superfish = array(
        'href' => 'application/dinas/modules/templates/views/default/css/superfish.css',
           'rel' => 'stylesheet',
           'type' => 'text/css',
           'media' => 'screen'
 );
 
 //echo link_tag($form);         
 echo link_tag($table); 


  echo link_tag($markitup); 
   echo link_tag($markitup_set); 
    echo link_tag($superfish); 



echo link_tag($blog);   





 ?>
 
 <script type="text/javascript" src="<?php echo base_url();?>application/dinas/modules/templates/views/default/js/jquery-1.7.1.min.js"></script>
 
 <script type="text/javascript" src="<?php echo base_url();?>application/dinas/modules/templates/views/default/js/jquery.cookie.js"></script>
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