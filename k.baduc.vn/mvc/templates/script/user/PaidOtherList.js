$(document).bind( "pagebeforechange", function( e, data ) {	
	var IdTerm = $(".TitleTerm").attr('alt');	
	$('.Term[alt|='+IdTerm+']').attr('data-theme','a');
});
