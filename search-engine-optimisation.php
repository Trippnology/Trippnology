<?php
include "inc/settings.php";

$strPageName = "Search Engine Optimisation";
$strCanonical = "search-engine-optimisation";
$strDescription = "Professional SEO service for Attleborough, Wymondham, Norwich, Thetford and beyond.";
$strKeywords = "Search Engine Optimisation, seo, Attleborough, Wymondham, Norwich, Thetford";
$SEOtitle = $strPageName . " | " . $siteName;
$pageSlug = "seo";
$pageHeaderImageURL = "img/ui/headers/4204140740_bce2b90dcf_o.jpg";
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
				<h2>You know your business. We know the web. Let's get together and make something great!</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident laudantium aliquam ullam sequi ipsa aperiam mollitia accusantium consequatur temporibus non ad aspernatur alias incidunt possimus maiores veritatis neque harum atque.</p>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="span8 offset1" id="main" role="main">
				<article>
					<h1>Your content here.</h1>
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
