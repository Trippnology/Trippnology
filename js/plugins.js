// Place any jQuery/helper plugins in here, instead of separate, slower script files.

/* UItoTop jQuery Plugin 1.2 | Matt Varone | http://www.mattvarone.com/web-design/uitotop-jquery-plugin */
(function($){$.fn.UItoTop=function(options){var defaults={text:'To Top',min:200,inDelay:600,outDelay:400,containerID:'toTop',containerHoverID:'toTopHover',scrollSpeed:1200,easingType:'linear'},settings=$.extend(defaults,options),containerIDhash='#'+settings.containerID,containerHoverIDHash='#'+settings.containerHoverID;$('body').append('<a href="#" id="'+settings.containerID+'">'+settings.text+'</a>');$(containerIDhash).hide().on('click.UItoTop',function(){$('html, body').animate({scrollTop:0},settings.scrollSpeed,settings.easingType);$('#'+settings.containerHoverID,this).stop().animate({'opacity':0},settings.inDelay,settings.easingType);return false;}).prepend('<span id="'+settings.containerHoverID+'"></span>').hover(function(){$(containerHoverIDHash,this).stop().animate({'opacity':1},600,'linear');},function(){$(containerHoverIDHash,this).stop().animate({'opacity':0},700,'linear');});$(window).scroll(function(){var sd=$(window).scrollTop();if(typeof document.body.style.maxHeight==="undefined"){$(containerIDhash).css({'position':'absolute','top':sd+$(window).height()-50});}
if(sd>settings.min)
$(containerIDhash).fadeIn(settings.inDelay);else
$(containerIDhash).fadeOut(settings.Outdelay);});};})(jQuery);

/*
 * EmailSpamProtection (jQuery Plugin)
 * Version: 1.0
 * Date: 2010 July
 * Author: Mike Unckel
 * Description and Demo: http://unckel.de/labs/jquery-plugin-email-spam-protection
 *
 * HTML: <span class="email">info [at] domain.com</span>
 * JavaScript: $("body").emailSpamProtection("email");
 *
 */

(function($) {
	$.fn.antiSpam = function(className) {
		return $(this).find("." + className).each(function() {
			var $this = $(this);
			var s = $this.text().replace(" [at] ", "&#64;");
			$this.html("<a href=\"mailto:" + s + "\">" + s + "</a>");
		});
	};
})(jQuery);
