<?php 
include "inc/strings.php";

$strPageName = "BootstraPHP";
$strCanonical = "start.php";
$strDescription = "Twitter bootstrap based modular framework";
$strKeywords = "keyword1, keyword2, keyword3";
$strTweetText = $strPageName;

include "setup.php";
?>

<body>
	<?php //include "inc/bs-navbar.php"; ?>
	<div class="container">
		
		<div class="row tiltwrapper">
			<div id="left" class="span2 tiltright shadowleft roundlrg">
				<?php 
				include "inc/vert-menu.php";
				include "inc/share.php";
				?>
			</div>
			
			<div class="span7" id="main" role="main">
				<h1 id="pagetitle"><a href="<?php $strCanonical ?>" title="<?php $strPageName ?>"><?php $strPageName ?></a></h1>
				<article>
					<img src="img/trippnology-logo-square-180.png" alt="Trippnology square logo" class="right roundlrg">
					<h1>About</h1>
					<p>The idea is to use Bootstrap and ASP to build a framework of modules used for rapid development of web projects. We're trying to make it flexible (as in, useful in may senarios), responsive, standards compliant (where practical), and ensure it contains everything the modern website needs right out of the box.</p>
					<p>There will be some components that aren't needed but it is easy to remove what's not required as things are laid out nice and logically.</p>
					<p>Please report bugs via the <a href="https://github.com/Trippnology/BootstraPHP/issues" title="BootstraPHP Issues">Github issue tracker</a> or better still, fix them and send a pull request! Likewise if you have suggestions for improvement, send a pull request.</p>
					<p>BootstrPHP is licenced under <a class="label" rel="external" href="https://creativecommons.org/licenses/by-sa/2.0/uk/">CC BY-SA 2.0</a> which means you are free to copy, distribute, hack, slice, make derivatives and even to make commercial use of it provided that you both credit <a rel="external" href="http://www.trippnology.com/">Trippnology</a> and release your work under a licence identical to this one.</p>
					<p>Please be aware that some of the components of Bootstrasp are covered by different licenses which are listed below.</p>
				</article>

				<article>
					<h1>What's included</h1>
					<p>Submodules:</p>
					<ul>
						<li><a rel="external" href="https://github.com/twitter/bootstrap.git">Bootstrap</a> <a class="label" rel="external" href="https://github.com/twitter/bootstrap/blob/master/LICENSE">Apache</a>
						<li><a rel="external" href="https://github.com/Modernizr/Modernizr.git">Modernizr</a> <a class="label" rel="external" href="http://modernizr.com/license/">MIT</a>
						<li><a rel="external" href="https://github.com/davatron5000/FitText.js.git">FitText</a> <a class="label" rel="external" href="http://sam.zoy.org/wtfpl/">WTFPL</a>
						<li><a rel="external" href="https://github.com/h5bp/ant-build-script.git">H5BP Ant Build Script</a>
					</ul>

					<p>CSS</p>
					<ul>
						<li><a rel="external" href="http://bootswatch.com/">Bootswatch</a> <a class="label" rel="external" href="http://www.apache.org/licenses/LICENSE-2.0.html">Apache</a>
						<li><a rel="external" href="http://www.google.com/webfonts">Google Fonts</a>
					</ul>
					<p>Javascript:</p>
					<ul>
						<li><a rel="external" href="http://jquery.com/">jQuery</a> <a class="label" rel="external" href="https://www.gnu.org/licenses/gpl-3.0.html">GPL</a> and these plugins:
							<ul>
								<li><a rel="external" href="http://gsgd.co.uk/sandbox/jquery/easing/">jQuery Easing</a>
								<li><a rel="external" href="http://archive.plugins.jquery.com/project/mousewheel">jQuery Mousewheel</a> <a class="label" rel="external" href="https://github.com/brandonaaron/jquery-mousewheel/blob/master/LICENSE.txt">&copy;Brandon Aaron</a>
								<li><a rel="external" href="http://bassistance.de/jquery-plugins/jquery-plugin-validation/">jQuery Validation</a> <a class="label" rel="external" href="https://www.gnu.org/licenses/gpl-3.0.html">GPL</a>
								<li><a rel="external" href="http://www.codefocus.ca/goodies/blockfader">BlockFader</a> <a class="label" rel="external" href="https://www.gnu.org/licenses/gpl-3.0.html">GPL</a>
								<li><a rel="external" href="http://fancybox.net/">Fancybox</a> <a class="label" rel="external" href="https://www.gnu.org/licenses/gpl-3.0.html">GPL</a>
								<li>ExternalLinks
							</ul>
						</li>
						<li><a rel="external" href="http://www.google.com/analytics/">Google Analytics</a>
					</ul>

					<p>Social:</p>
					<ul>
						<li><a rel="external" href="http://twitter.com/about/resources/buttons">Twitter Tweet Button</a>
						<li><a rel="external" href="http://developers.facebook.com/docs/reference/plugins/like/">Facebook Like Button</a>
						<li><a rel="external" href="http://www.addthis.com/">AddThis Button</a>
					</ul>

					<p>Development</p>
					<ul>
						<li><a rel="external" href="http://livejs.com/">Live.js</a> <a class="label" rel="external" href="http://livejs.com/license">MIT</a>
					</ul>

					<p>Full details are included in the <a href="Readme.md" class="hastooltip" title="Read the fricken manual" target="_blank">Readme file</a>.</p>
				</article>
			</div>
			
			<div id="right" class="span3 tiltleft shadowright roundlrg">
			<?php //include "inc/sidebar.php"; ?>
			</div>
		</div>
		
		<div class="row">
			<div class="span12">
			<?php //include "inc/footer.php"; ?>
			</div>
		</div>
    </div>       
<?php include "setup2.php"; ?>

<!-- Put page specific jQuery stuff here -->
<script>
</script>
<!-- End of jQuery stuff -->
</body>
</html>