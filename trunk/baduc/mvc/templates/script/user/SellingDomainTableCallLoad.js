$(document).ready(function(){
	$.mobile.loadingMessageTextVisible = true;
	$('.Plus').live('click', function(){
		var URL = $(".Table").attr('alt');
		var IdCourse = $(this).attr('alt');
		var Count = $(this).find('.ui-li-count').html();
						
		URL = URL+"/"+IdCourse+"/plus";
		$.mobile.showPageLoadingMsg();
		$.ajax({
			type: "POST", 
			async: false,
			url: URL,
			dataType: 'json',			
			success: function(data){
				Count = data.Count;
				$.mobile.hidePageLoadingMsg();
			}
		});
		$(this).find('.ui-li-count').html( Count);
	});	
	
	$('.Minus').live('click', function(){
		var URL = $(".Table").attr('alt');
		var IdCourse = $(this).attr('alt');
		var Count = $(this).prev().find('.ui-li-count').html();
		
		if (Count==0)
			return;
						
		URL = URL+"/"+IdCourse+"/minus";
		$.mobile.showPageLoadingMsg();
		$.ajax({
			type: "POST",
			async: false,
			url: URL,
			dataType: 'json',			
			success: function(data){
				Count = data.Count;
				$.mobile.hidePageLoadingMsg();
			}			
		});
		$(this).prev().find('.ui-li-count').html( Count);
	});	
	
});
