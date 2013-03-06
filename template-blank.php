<?php 
include "inc/settings.php";

$strPageName = "Blank Page";
$strCanonical = "template-blank.php";
$strDescription = "Bare minimum of components.";
$strKeywords = "keyword1, keyword2, keyword3";
$SEOtitle = $strPageName . " | " . $siteName;
$pageSlug = "blank";
$pageHeaderImageURL = "img/home/4150657215_a411d19e5e_b.jpg";
$pageHeaderImageURLSource = "https://secure.flickr.com/photos/manchester-monkey/4150657215/";
$strTweetText = $strPageName;

include "head.php";
?>

<body class="page-<?=$pageSlug?>">
	<?php include "inc/navbar.php"; ?>

	<header class="page-header">
		<img src="<?=$pageHeaderImageURL?>" alt="" data-sourceurl="<?=$pageHeaderImageURLSource?>">
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
					<h1 id="pagetitle"><a href="<?= $strCanonical ?>" title="<?= $strPageName ?>"><?= $strPageName ?></a></h1>
					<p>Your content here.</p>
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