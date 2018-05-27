
$(window).load(function(){
	
	if($(window).width() >= 1024){
		
		var a = $(window).height();
		var b = $('.dashboard_header').height();
		var d = $('.dashboard_foot').height();
		var z = b + d ;
		var c = a - z ;
		$('.dashboardloginWrapper').css({'height': c, 'top': b}) ;
	}
	

}); 

	if($('#datepicker').length){
  		$( function() {
			$( "#datepicker" ).datepicker();
			$( "#datepicker2" ).datepicker();
		});
	}