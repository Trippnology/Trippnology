<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='js/libs/jquery-1.7.1.min.js'>\x3C/script>")</script>

<!-- Grab extra jQuery files from CDN or fall back to local -->
<script src="//cachedcommons.org/cache/jquery-easing/1.3.0/javascripts/jquery-easing-min.js"></script>
<script>window.jQuery || document.write("<script src='js/libs/jquery.easing-1.3.pack.js'>\x3C/script>")</script>

<script src="js/libs/bootstrap.min.js"></script>
<!-- //-beg- concat_js -->
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<!-- //-end- concat_js -->

<!-- Google Analytics -->
<script>
	(function(window, document, variableName, scriptElement, firstScript) {
	window['GoogleAnalyticsObject'] = variableName;
	window[variableName] || (window[variableName] = function() {
		(window[variableName].q = window[variableName].q || []).push(arguments)
	});
	window[variableName].l = +new Date;
	scriptElement = document.createElement('script'),
	firstScript = document.scripts[0];
	scriptElement.src = '//www.google-analytics.com/analytics.js';
	firstScript.parentNode.insertBefore(scriptElement, firstScript)
	}(window, document, 'ga'));

	ga('create', '<?=$adminGoogleAnalID?>');
	ga('send', 'pageview');
</script>

