<?php
include "inc/settings.php";

$strPageName = "Website suspended";
$strCanonical = "suspended";
$strDescription = "Bare minimum of components.";
$strKeywords = "";
$SEOtitle = $strPageName . " | " . $siteName;
$pageSlug = "blank";
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
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="span8 offset1" id="main" role="main">
				<article>
					<h1>Site Suspended</h1>
					<p class="lead">NOTICE</p>
					<p>You are seeing this page because the website you are trying to visit has been suspended.</p>
					<p>If you are the owner of the website, please <a href="contact">contact us</a> immediately.</p>
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

</body>
</html>
