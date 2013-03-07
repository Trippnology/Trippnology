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
	$('#modal-global').modal('hide');
	// Fancybox
	$("#fancybox-trigger").fancybox({
		'titlePosition'		: 'inside',
		'transitionIn'		: 'elastic',
		'transitionOut'		: 'elastic'
	});

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

	// 3D text links
	function initRollLinks(){
		if( typeof is_ie_lte9 !== 'undefined' || typeof is_ie_10 !== 'undefined' )
			return; 
		$('.featurette p a, article a, footer a').each(function(i,e){
			var link = $(e);
			if( !link.html().match(/<img/gi) ){
				link.addClass('roll-link');
				link.html('<span data-title="'+ link.text() +'">' + link.html() + '</span>');
			};
		});
	};
	initRollLinks();
	// Dump roll links if they are in a badge or button
	$('a.badge, a.btn, button.btn').removeClass('roll-link');

	// Smooth scroll to anchors on the page
	var scroller = function(id){
		$('html, body').animate({
			scrollTop: $(id).offset().top
		}, 1000);
	};
	// Turn our intro links into smooth scrollers
	$('.intro a.btn').click(function(){
		var anchor = $(this).attr('href');
		scroller(anchor);
	})
});