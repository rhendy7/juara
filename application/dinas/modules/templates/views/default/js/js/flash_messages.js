

$(document).ready(function(){

	
	
   setTimeout(function(){
  $("div#success").fadeOut("slow", function () {
  $("div#success").remove();
      });

}, 12000);


  setTimeout(function(){
  $("div#fail").fadeOut("slow", function () {
  $("div#fail").remove();
      });

}, 12000);

  setTimeout(function(){
  $("div#warning").fadeOut("slow", function () {
  $("div#warning").remove();
      });

}, 12000);





});