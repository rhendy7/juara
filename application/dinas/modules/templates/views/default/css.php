<?php 



$this->load->helper('html');
$link = array(
           'href' => 'application/dinas/modules/templates/views/default/css/form.css',
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
 
 echo link_tag($link);         
 echo link_tag($table); 


  echo link_tag($markitup); 
   echo link_tag($markitup_set); 
    echo link_tag($superfish); 


 ?>
 
