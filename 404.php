<?php
include "inc/settings.php";

$strPageName = "404 Not Found";
$strCanonical = "404";
$strDescription = "Sorry, we couldn't find that page.";
$strKeywords = "404, error, not found, missing";
$SEOtitle = $strPageName . " | " . $siteName;
$pageSlug = "404";
$pageHeaderImageURL = "img/ui/headers/trippnology-default.jpg";
$pageHeaderImageURLSource = "https://secure.flickr.com/photos/manchester-monkey/4150657215/";
$strTweetText = $strPageName;

include "head.php";
?>

<body class="page-<?=$pageSlug?>">
	<?php include "inc/navbar.php"; ?>

	<header class="page-header roundlrg">
		<img src="<?=$pageHeaderImageURL?>" alt="" class="roundlrg" data-sourceurl="<?=$pageHeaderImageURLSource?>">
		<div class="container">
			<div class="header-caption roundlrg">
				<h1 id="pagetitle"><a href="<?= $strCanonical ?>" title="<?= $strPageName ?>"><?= $strPageName ?></a></h1>
				<h2>Whoops! Something went wrong. :(</h2>
				<p>(Probably not your fault though)</p>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="span9" id="main" role="main">
				<article>
					<h1>Sorry, but the page you were trying to view does not exist.</h1>
					<p>It looks like this was the result of either:</p>
					<ul>
					    <li>a mistyped address</li>
					    <li>an out-of-date link</li>
					</ul>
					<p>We would really appreciate it if you <a href="contact">let us know</a> about this.</p>
					<script>
						var GOOG_FIXURL_LANG = (navigator.language || '').slice(0,2),GOOG_FIXURL_SITE = location.host;
					</script>
					<script src="//linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>
				</article>
			</div><!-- /#main -->
			<div class="span3">
				<?php include "inc/nav-block.php"; ?>
			</div>
		</div><!-- /.row -->

		<div class="row">
			<div class="span12">
				<?php include "inc/footer.php"; ?>
			</div>
		</div>
    </div>

	<?php include "scriptblock.php"; ?>
	<script>
		// Prettify the Google helper script
		$(document).ready(function() {
			$('#goog-wm ul').addClass('unstyled');
			var appendwrap = $('<div>').addClass('input-append').html($('li.search-goog form').html());
			$('li.search-goog form').addClass('form-search').html(appendwrap).css({'margin-top': '1.5em', 'font-family': 'museo_sans_300regular'});
			$('#goog-wm-qt').addClass('search-query');
			$('#goog-wm-sb').addClass('add-on btn').css({'font-size': '16px', 'height': 'auto'});
		});
	</script>
</body>
</html>
