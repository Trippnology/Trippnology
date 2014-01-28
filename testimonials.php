<?php
include "inc/settings.php";

$strPageName = "Testimonials";
$strCanonical = "testimonials";
$strDescription = "We what our customers have to say about our fast, friendly service.";
$strKeywords = "testimonials, reviews";
$SEOtitle = $strPageName . " | " . $siteName;
$pageSlug = "testimonials";
$pageHeaderImageURL = "img/ui/headers/trippnology-default.jpg";
$pageHeaderImageURLSource = "https://secure.flickr.com/photos/manchester-monkey/4150657215/";
$strTweetText = $strPageName;

include "head.php";
?>

<body class="page-<?=$pageSlug?>">
	<?php include "inc/navbar.php"; ?>

	<header class="page-header roundlrg">
		<img src="<?=$pageHeaderImageURL?>" alt="Testimonials header" class="roundlrg" data-sourceurl="<?=$pageHeaderImageURLSource?>">
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
					<p>You can leave your own review on our <a href="https://plus.google.com/108008988541980903471/about" rel="external">Google+</a> or <a href="http://www.touchnorwich.com/business/list/bid/7169442" rel="external">Touch Local</a> pages.</p>

					<hr class="divider roundlrg large">

					<blockquote>
						<p>Having discussed what we needed and wanted as a company, Rikki provided us with a detailed spec sheet of what would be completed. We have not looked back since. He delivered on time, to budget and provides support on a level that every staff member can understand. His personable nature and excellent understanding in his area of expertise makes problem solving and one-off jobs a pleasure to undertake, with his constructive and positive direction.</p>
						<p>A big thank you for all you have done so far, from Avant UK.</p>
						<small>Frances Dunton of <a href="http://avant.co.uk">Avant Tecno</a></small>
					</blockquote>

					<hr class="divider roundlrg large">

					<blockquote>
						<p>As a Financial Services business we rely quite heavily on our IT and have found Rikki an invaluable support.  He has an excellent knowledge but can explain problems and systems in an easy to understand manner and can create a fix for everything!</p>
						<p>We couldn’t do without him!</p>
						<small>Maggie Nobbs of Personal Face2Face Advice Ltd.</small>
					</blockquote>

					<hr class="divider roundlrg large">

					<blockquote>
						<p>I have used Trippnology to design several websites and have been very satisfied with their delivery. They work with me to ensure design and site structure is what I, or my clients, want; and deliver the service swiftly and flexibly when things or minds get changed in the middle of a web-build.</p>
						<p>Their ongoing support is also timely and good value. Highly recommended.</p>
						<small>Lucy McCarraher of <a href="http://rethinkpress.com/">Rethink Press</a></small>
					</blockquote>

					<hr class="divider roundlrg large">

					<blockquote>
						<p>I designed our own website using an off the shelf package and managed to wipe out my business email trying to publish it. I turned to Rikki in my panic and he fixed and reorganised everything calmly and quickly.</p>
						<p>Rikki pointed out our website was difficult for customers to find. He re-wrote it for SEO and improved the design. The amount of new enquiries tripled immediately. Our new website has increased sales and portrays a professional image of The Limecrete Company Ltd.</p>
						<small>Louisa Yallop of <a href="http://www.limecrete.co.uk/" rel="external">The Limecrete Company Ltd.</a></small>
					</blockquote>

					<hr class="divider roundlrg large">

					<blockquote>
						<p>Just wanted to say a massive thank you to Rikki for coming out to set up our home/business network, PCs and security systems and for your continued telephone and online support. We really couldn't manage without you!</p>
						<small>Craig Obey of <a href="https://www.facebook.com/CompleteSolarSolutions">Complete Solar Solutions</a></small>
					</blockquote>

					<hr class="divider roundlrg large">

					<blockquote>
						<p>My wife and I were illiterate as far as computers are concerned. Rikki has helped us choose equipment, has installed it and shows us how to use it. He quickly answers all of our silly queries with great patience.</p>
						<p>Without his help we would be quite lost. He is invaluable.</p>
						<small>Barry Capon</small>
					</blockquote>

					<hr class="divider roundlrg large">

					<blockquote>
						<p>"I have used Trippnology for technical support for several years. The standard of service and knowledge is exceptional. All tasks handed to Trippnology have been handled quickly and expertly turned into working solutions with outstanding results.</p>
						<p>These tasks included technical support via telephone, skype and email on all aspects of computing technology with exceptional levels of understanding. All hardware left for repair and upgrade is providing faultless trouble free daily use.</p>
						<p>Trippnology is considered excellent value for money, very competitive and more importantly to myself, a trusted professional."</p>
						<small> John Purgal-Woods of <a href="http://www.multipointservices.com/" rel="external">Multipoint Services</a></small>
					</blockquote>

					<hr class="divider roundlrg large">

					<blockquote>
						<p>"I have used this company for at least 8 years. Rikki is reliable, inventive, discrete and very good company. You can rely on Rikki for customer service and attention to detail. He can fix anything!<br>
						Look at my website (designed by Trippnology) for the gardens where I live."</p>
						<small> John Alston C.B.E. of <a href="http://www.besthorpe.com/" rel="external">Besthorpe Hall</a></small>
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
