/*-------------------*/
/* 	FILTER CLIENT 	*/
/*-------------------*/

$(document).ready(function(){
	
	
	
	$("#FilterTextBox").keyup(function(){
		
		$(".filterclient").tablefilter($(this).val());
	
	});


/*-------------------*/
/* 	Diseño */
/*-------------------*/



//$("tr:first-child").siblings("#content_table").css("background", "yellow");

             
$("tr#content_table").hover(
  function () {
   	$(this).addClass("hola");
  }, 
  function () {
    $(this).removeClass("hola");
  }
);             




});


