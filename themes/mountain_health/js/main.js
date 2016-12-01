(function($) {

    $('.menu-toggle').on('click', function(event) {
        event.preventDefault();
        $('#primary-menu').toggle("slide", { direction: "left" }, 2000);
    })

    // news and events button to show/hide news/events
    	$(".events-section").on('click', function(){
		event.preventDefault();
		$(".events-lists").show();
        $(".news-lists").hide();
	});

 	$(".news-section").on('click', function(){
		event.preventDefault();
		$(".news-lists").show();
        $(".events-lists").hide();
	}); 
    /////////
    
})(jQuery);