// common javascript

	jQuery(document).ready(function() {
	
		// clear field for default input values
	    jQuery('.clear-field').each(function(i) {	    	
	    	// clearing event
	    	jQuery(this).bind("focus", function(e) {
	    		if (e.target.value == e.target.defaultValue) e.target.value = "";
	    	});	    	
	    	// resetting event
	    	jQuery(this).bind("blur", function(e) {
	    		if (e.target.value == "") e.target.value = e.target.defaultValue;
	    	});
	    
	    });
	    
	    // primary nav suckerfish hover
	    jQuery('#primary-nav > li').hover(function() {
	    	jQuery(this).addClass("hover");
	    }, function() {
	    	jQuery(this).removeClass("hover");
	    });
	    
	    // open links in new window
	    jQuery('target-blank').attr("target", "_blank");
	 
	 });
	 