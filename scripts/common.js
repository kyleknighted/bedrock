// common javascript

	jQuery(function($) {
	
		// clear field for default input values
	    $('.clear-field').each(function(i) {	    	
	    	// clearing event
	    	$(this).bind("focus", function(e) {
	    		if (e.target.value === e.target.defaultValue) e.target.value = "";
	    	});	    	
	    	// resetting event
	    	$(this).bind("blur", function(e) {
	    		if (e.target.value === "") e.target.value = e.target.defaultValue;
	    	});
	    
	    });
	    
	    // primary nav suckerfish hover
	    $('#primary-nav > li').hover(function() {
	    	$(this).addClass("hover");
	    }, function() {
	    	$(this).removeClass("hover");
	    });
	    
	    // open links in new window
	    $('.target-blank').attr("target", "_blank");
	 
	 });
	 