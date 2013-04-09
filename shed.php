<?php
include "inc/settings.php";

$strPageName = "The Shed";
$strCanonical = "shed";
$strDescription = "Where we tinker around at the weekends. Grab yourself a cuppa and come on in!";
$strKeywords = "shed, experimental, html, css, javascript, projects";
$SEOtitle = $strPageName . " | " . $siteName;
$pageSlug = "shed";
$pageHeaderImageURL = "img/ui/headers/4150657215_a411d19e5e_b.jpg";
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
				<h2>Where we tinker around at the weekends. Grab yourself a cuppa and come on in!</h2>
				<p>Be warned, here be dragons. Things on this page may stop working, disappear, explode or crash. Don't use this stuff in production.</p>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="span8 offset1" id="main" role="main">
				<article>
					<blockquote>
						<p>"The true secret of happiness was to be busy with unimportant things."</p>
						<small>J B Priestley</small>
					</blockquote>
				</article>

				<hr class="divider">

				<article>

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

<script src="js/shed.js"></script>
</body>
</html>
