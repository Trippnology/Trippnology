/* Your JS goes here */
$(document).ready(function() {
	// Bootstrap
	$('.dropdown-toggle').dropdown();
	$('a.tooltip-top').tooltip({
		'placement' : 'top'
	});
	$('a.tooltip-right').tooltip({
		'placement' : 'right'
	});
	$('a.tooltip-bottom').tooltip({
		'placement' : 'bottom'
	});
	$('a.tooltip-left').tooltip({
		'placement' : 'left'
	});
	$('#globalmodal').modal('hide')
	// Fancybox
	$("#fancybox-trigger").fancybox({
		'titlePosition'		: 'inside',
		'transitionIn'		: 'elastic',
		'transitionOut'		: 'elastic'
	})

// UI.toTop 
/* Change settings here or pass through in the call
	var defaults = {
		containerID: 'toTop', // fading element id
		containerHoverID: 'toTopHover', // fading element hover id
		scrollSpeed: 1200,
		easingType: 'linear'
	};
*/
	$().UItoTop({ easingType: 'easeOutQuart' });

	// Make external links open in a new window	
	$('a[rel="external"]').attr('target', '_blank');
});