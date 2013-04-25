<?php
include "inc/settings.php";

$strPageName = "Testimonials";
$strCanonical = "testimonials";
$strDescription = "We what our customers have to say about our fast, friendly service.";
$strKeywords = "testimonials, reviews";
$SEOtitle = $strPageName . " | " . $siteName;
$pageSlug = "testimonials";
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
				<h2>See why our customers keep coming back!</h2>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="span9" id="main" role="main">
				<article>
					<h1>What our customers have to say...</h1>
					<p>You can leave your own review on our <a href="http://maps.google.co.uk/maps/place?cid=17370591561013489825" rel="external">Google Places</a> or <a href="http://www.touchnorwich.com/business/list/bid/7169442" rel="external">Touch Local</a> pages.</p>

					<hr class="divider roundlrg large">

					<blockquote>
						<p>I designed our own website using an off the shelf package and managed to wipe out my business email trying to publish it. I turned to Rikki in my panic and he fixed and reorganised everything calmly and quickly.</p>
						<p>Rikki pointed out our website was difficult for customers to find. He re-wrote it for SEO and improved the design. The amount of new enquiries tripled immediately. Our new website has increased sales and portrays a professional image of The Limecrete Company Ltd.</p>
						<small>Louisa Yallop of <a href="http://www.limecrete.co.uk/" rel="external">The Limecrete Company Ltd.</a></small>
					</blockquote>

					<hr class="divider roundlrg large">

					<blockquote>
						<p>"I have used this company for at least 8 years. Rikki is reliable, inventive, discrete and very good company. You can rely on Rikki for customer service and attention to detail. He can fix anything!<br>
						Look at my website (designed by Trippnology) for the gardens where I live."</p>
						<small> John Alston C.B.E. of <a href="http://www.besthorpe.com/" rel="external">Besthorpe Hall</a></small>
					</blockquote>

					<hr class="divider roundlrg large">

					<blockquote>
						<p>"I have used Trippnology for technical support for several years. The standard of service and knowledge is exceptional. All tasks handed to Trippnology have been handled quickly and expertly turned into working solutions with outstanding results.</p>
						<p>These tasks included technical support via telephone, skype and email on all aspects of computing technology with exceptional levels of understanding. All hardware left for repair and upgrade is providing faultless trouble free daily use.</p>
						<p>Trippnology is considered excellent value for money, very competitive and more importantly to myself, a trusted professional."</p>
						<small> John Purgal-Woods of <a href="http://www.multipointservices.com/" rel="external">Multipoint Services</a></small>
					</blockquote>

					<hr class="divider roundlrg large">

					<h2 class="center">We would love to work with you too! <a href="contact">Get in touch</a></h2>
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
