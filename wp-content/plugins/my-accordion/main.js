

jQuery(window).load(function() {

	jQuery('.toggle-content').each(function() {
		if(!jQuery(this).hasClass('default-open')){
			jQuery(this).hide();
		}
	});

	jQuery("h5.toggle").click(function(){
		if(jQuery(this).parents('.accordian').length >=1){
			var accordian = jQuery(this).parents('.accordian');

			if(jQuery(this).hasClass('active')){
				jQuery(accordian).find('h5.toggle').removeClass('active');
				jQuery(accordian).find(".toggle-content").slideUp();
			} else {
				jQuery(accordian).find('h5.toggle').removeClass('active');
				jQuery(accordian).find(".toggle-content").slideUp();

				jQuery(this).addClass('active');
				jQuery(this).next(".toggle-content").slideToggle();
			}
		} else {
			if(jQuery(this).hasClass('active')){
				jQuery(this).removeClass("active");
			}else{
				jQuery(this).addClass("active");
			}
		}

		return false;
	});

	jQuery("h5.toggle").click(function(){
		if(!jQuery(this).parents('.accordian').length >=1){
			jQuery(this).next(".toggle-content").slideToggle();
		}
	});

});