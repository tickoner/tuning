//parallax
$(document).ready(function() {
	jQuery("#wrapper").mousemove(
		function(e){

			var offset = jQuery(this).offset();
			var xPos = e.pageX - offset.left;
			var yPos = e.pageY - offset.top;

			var mouseXPercent = Math.round(xPos / jQuery(this).width() * 100);
			var mouseYPercent = Math.round(yPos / jQuery(this).height() * 100);

			jQuery(this).find('.absolute-img').each(
				function(){
					var diffX = jQuery('.caption').width() - jQuery(this).width();
					var diffY = jQuery('.caption').height() - jQuery(this).height();

					var myX = diffX * (mouseXPercent / 1000);

					var myY = diffY * (mouseYPercent / 800);


					var cssObj = {
						'left': myX + '%',
						'top': myY + '%'
					}

					jQuery(this).animate({left: myX, top: myY},{duration: 50, queue: false, easing: 'linear'});

				}
			);

		}
	);
});
