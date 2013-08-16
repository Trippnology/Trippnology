<?php
include "inc/settings.php";

$strPageName = "500 Internal Server Error";
$strCanonical = "500";
$strDescription = "Sorry, something went wrong.";
$strKeywords = "500, error, internal server error";
$SEOtitle = $strPageName . " | " . $siteName;
$pageSlug = "500";
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
					<h1>Sorry, but our server is under heavy load.</h1>
					<p>The best option is to refresh the page in a little while and see if things are back to normal.</p>
					<p>We would really appreciate it if you <a href="contact">let us know</a> about this.</p>
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
