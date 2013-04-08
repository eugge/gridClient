/*-------------------*/
/* 	FILTER CLIENT 	*/
/*-------------------*/

$(document).ready(function(){
	$("#FilterTextBox").keyup(function(){
		$(".filterclient").tablefilter($(this).val());
	});
});

/*-------------------*/
/* 	PAGINATION */
/*-------------------*/



$(document).ready(
	function() {
		$("#table1").ingrid({ 
			url: 'remote.html',
			height: 350
		});
	}
); 
