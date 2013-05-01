<?php
include "inc/settings.php";

$strPageName = "Sitemap";
$strCanonical = "sitemap";
$strDescription = "A list of all the pages on our site.";
$strKeywords = "";
$SEOtitle = $strPageName . " | " . $siteName;
$pageSlug = "sitemap";
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
				<h2>A list of all the pages on our site.</h2>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="span9" id="main" role="main">
				<article>
					<ul>
						<li><a href="http://trippnology.com/about">About Trippnology</a></li>
						<li><a href="http://trippnology.com/contact">Contact Us</a></li>
						<li><a href="http://trippnology.com/web-design-attleborough">Web Design Attleborough</a>
							<ul>
								<li><a href="http://trippnology.com/web-design-attleborough#project-assessment">Project Assessment</a></li>
								<li><a href="http://trippnology.com/web-design-attleborough#website-updates">Website Updates</a></li>
								<li><a href="http://trippnology.com/web-design-attleborough#portfolio">Portfolio</a></li>
							</ul>
						</li>
						<li><a href="http://trippnology.com/search-engine-optimisation-attleborough">Search Engine Optimisation Attleborough</a></li>
						<li><a href="http://trippnology.com/it-support-attleborough">IT Support Attleborough</a></li>
						<li><a href="http://trippnology.com/prices">Web design and IT support pricing</a>
							<ul>
								<li><a href="http://trippnology.com/prices#web-design">Web Design</a></li>
								<li><a href="http://trippnology.com/prices#seo">SEO</a></li>
								<li><a href="http://trippnology.com/prices#web-hosting">Web Hosting</a></li>
								<li><a href="http://trippnology.com/prices#domain-names">Domain Names</a></li>
								<li><a href="http://trippnology.com/prices#it-support">IT Support</a></li>
							</ul>
						</li>
						<li><a href="http://trippnology.com/testimonials">Testimonials</a></li>
						<li><a href="http://trippnology.com/shed">The Shed</a></li>
						<li><a href="http://trippnology.com/privacy-policy">Privacy Policy</a></li>
					</ul>
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
