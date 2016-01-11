jQuery(document).ready(function() {
	jQuery('.carousel').carousel({
		interval: false
	});
	jQuery('[id^=carousel-selector-]').click( function(){
		var id_selector = $(this).attr("id");
		var id = id_selector.substr(id_selector.length -1);
		var id = parseInt(id);
		jQuery('#myCarousel').carousel(id);
   });

	var vw = jQuery(window).width();
	if (vw >700) {
		
	}
});

jQuery(window).load(function() {

});

jQuery(window).resize(function() {
});