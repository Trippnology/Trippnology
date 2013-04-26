<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='js/libs/jquery-1.7.1.min.js'>\x3C/script>")</script>

<!-- Grab extra jQuery files from CDN or fall back to local -->
<script src="//cachedcommons.org/cache/jquery-easing/1.3.0/javascripts/jquery-easing-min.js"></script>
<script>window.jQuery || document.write("<script src='js/libs/jquery.easing-1.3.pack.js'>\x3C/script>")</script>
<script src="//cachedcommons.org/cache/jquery-mousewheel/3.0.3/javascripts/jquery-mousewheel-min.js"></script>
<script>window.jQuery || document.write("<script src='js/libs/jquery.mousewheel-3.0.4.pack.js'>\x3C/script>")</script>

<!-- Submodules -->
<!-- Bootstrap -->
<script src="js/libs/bootstrap.min.js"></script>

<!-- DO NOT modify the following (including the comments) -->
<!-- scripts concatenated and minified via ant build script-->
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<!-- end scripts-->

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

