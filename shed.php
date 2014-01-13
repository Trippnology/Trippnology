<?php
include "inc/settings.php";

$strPageName = "The Shed";
$strCanonical = "shed";
$strDescription = "Where we tinker around at the weekends. Grab yourself a cuppa and come on in!";
$strKeywords = "shed, experimental, html, css, javascript, projects";
$SEOtitle = $strPageName . " | " . $siteName;
$pageSlug = "shed";
$pageHeaderImageURL = "img/ui/headers/shed.jpg";
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
			<div class="span9" id="main" role="main">
				<article>
					<h1>Projects</h1>
					<ul id="projects" class="unstyled">
						<li>If you had <a href="http://www.enable-javascript.com" rel="external">javascript enabled</a> you would see a list of projects here.</li>
					</ul>
				</article>

				<hr class="divider roundlrg large">

				<article>
					<h1>Open Source Projects</h1>
					<div id="proj-github">If you had <a href="http://www.enable-javascript.com" rel="external">javascript enabled</a> you would see our <a href="http://github.com/Trippnology">list of projects on github</a>.</div>
				</article>

				<hr class="divider roundlrg large">

				<article>
					<h1>Coderwall Achievements</h1>
					<div id="proj-coderwall" class="clearfix">If you had <a href="http://www.enable-javascript.com" rel="external">javascript enabled</a> you would see our <a href="http://coderwall.com/Trippnology" rel="external">list of achievements on Coderwall</a></div>
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

<script src="js/jquery-proudify.min.js"></script>
<script src="js/libs/sketch.min.js"></script>
<script src="js/shed.js"></script>
</body>
</html>
