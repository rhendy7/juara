$(function(){
	
	$('#datepicker').datepicker({inline: true});
	$('#markItUp').markItUp(myHtmlSettings);
	
	initMenu();
	$('.info_div').click(function() {$(this).fadeOut('slow')});

	$('#tabs').tabs();

	$("#tabledata").resizable({ maxWidth: 940 });
	
	
	
	});
	
	
myHtmlSettings = {
    nameSpace:       "html", // Useful to prevent multi-instances CSS conflict
    onShiftEnter:    {keepDefault:false, replaceWith:'<br />\n'},
    onCtrlEnter:     {keepDefault:false, openWith:'\n<p>', closeWith:'</p>\n'},
    onTab:           {keepDefault:false, openWith:'     '},
    markupSet:  [
        {name:'Bold', key:'1', openWith:'<b(!( class="[![Class]!]")!)>', closeWith:'</b>', placeHolder:'Your title here...' },
        {name:'Italic', key:'2', openWith:'<i(!( class="[![Class]!]")!)>', closeWith:'</i>', placeHolder:'Your title here...' },
        {name:'Heading 3', key:'3', openWith:'<h3(!( class="[![Class]!]")!)>', closeWith:'</h3>', placeHolder:'Your title here...' },
        {name:'Heading 4', key:'4', openWith:'<h4(!( class="[![Class]!]")!)>', closeWith:'</h4>', placeHolder:'Your title here...' },
        {name:'Heading 5', key:'5', openWith:'<h5(!( class="[![Class]!]")!)>', closeWith:'</h5>', placeHolder:'Your title here...' },
        {name:'Heading 6', key:'6', openWith:'<h6(!( class="[![Class]!]")!)>', closeWith:'</h6>', placeHolder:'Your title here...' },
        {name:'Preview', call:'preview', className:'preview' }
    ]
}		



 function initMenu() {
  $('#menu ul').hide();
  $('#menu ul:first').show();
  $('#menu li a').click(
  function() {
  var checkElement = $(this).next();
  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
  return false;
  }
  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
  $('#menu ul:visible').slideUp('normal');
  checkElement.slideDown('normal');
  return false;
  }
  }
  );
  }				
