/* Clear forms */
(function($){
	$.fn.clearDefault = function(){
		return this.each(function(){
			var default_value = $(this).val();
			$(this).focus(function(){
				if ($(this).val() == default_value) $(this).val("");
			});
			$(this).blur(function(){
				if ($(this).val() == "") $(this).val(default_value);
			});
		});
	};
})(jQuery);

$(document).ready(function(){
	
	$('a[rel=external]').attr('target','_blank');
	$('.clear-text').clearDefault();
	
	$('#content section').click(function(){
		var refW = $(window).width();
		refW = refW - (((refW*20)/100)+600);
		var active = this;
		$('#content section').not(active).stop().animate({width:150},250,'easeOutCubic').removeClass('active');
		if(refW >= 250){
			$(active).animate({width:refW},250,'easeOutCubic').addClass('active');
		}else{
			$(active).animate({width:400},250,'easeOutCubic').addClass('active');
		};
	});
	
	$(window).resize(function(){
		var refW = $(window).width();
		refW = refW - (((refW*20)/100)+600);
		if(refW >= 250){
			$('#content section.active').css({width:refW});
		};
	});
	
});