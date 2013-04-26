<?php
include "inc/settings.php";

$strPageName = "The Shed";
$strCanonical = "shed";
$strDescription = "Where we tinker around at the weekends. Grab yourself a cuppa and come on in!";
$strKeywords = "shed, experimental, html, css, javascript, projects";
$SEOtitle = $strPageName . " | " . $siteName;
$pageSlug = "shed";
$pageHeaderImageURL = "img/ui/headers/2206465257_b0b5878a58_b.jpg";
$pageHeaderImageURLSource = "http://www.flickr.com/photos/carbonnyc/2206465257/";
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
				<h2>Where we tinker around at the weekends.<br>Grab yourself a cuppa and come on in!</h2>
				<p>Here be dragons. Things on this page are generally experimental and may stop working, disappear, explode or crash at any moment!</p>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="span8 offset1" id="main" role="main">
				<article>
					<h1>Projects</h1>
					<ul id="projects" class="unstyled"></ul>
				</article>

				<article>
					<blockquote>
						<p>"The true secret of happiness was to be busy with unimportant things."</p>
						<small>J B Priestley</small>
					</blockquote>
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
