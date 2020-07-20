(function($) {
 "use strict";

$(function() {
	
	$('#st-accordion').accordion();
	
	$('#st-accordion-two').accordion({
				oneOpenedItem	: true
			});
	
	$('#st-accordion-three').accordion({
				oneOpenedItem	: true,
				open			: 0,
			});
	
	$('#st-accordion-four').accordion({
				oneOpenedItem	: true,
				/*open			: 0,*//*this will make all accordians close for first time*/
			});
	$('#st-accordion-five').accordion({
				open			: 0,
			});
		
});

})(jQuery);
