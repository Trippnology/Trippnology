<?php
include "inc/settings.php";

$strPageName = "About Trippnology";
$strCanonical = "about";
$strDescription = "All about Trippnology are why we're the right choice for your business.";
$strKeywords = "trippnology, green, ethical";
$SEOtitle = $strPageName . " | " . $siteName;
$pageSlug = "about";
$pageHeaderImageURL = "img/ui/headers/trippnology-default.jpg";
$pageHeaderImageURLSource = "https://secure.flickr.com/photos/manchester-monkey/4150657215/";
$strTweetText = $strPageName;

include "head.php";
?>

<body class="page-<?=$pageSlug?>">
	<?php include "inc/navbar.php"; ?>

	<header class="page-header roundlrg">
		<img src="<?=$pageHeaderImageURL?>" alt="About Trippnology header" class="roundlrg" data-sourceurl="<?=$pageHeaderImageURLSource?>">
		<div class="container">
			<div class="header-caption roundlrg">
				<h1 id="pagetitle"><a href="<?= $strCanonical ?>" title="<?= $strPageName ?>"><?= $strPageName ?></a></h1>
				<h2>Hello there! Nice to meet you!</h2>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="span9" id="main" role="main">
				<article>
					<h1>Here's a little explanation of what we're all about:</h1>

					<hr class="divider roundlrg large">

					<div class="row">
						<div class="span4">
							<ol>
								<li><span class="lead">Great service is everything</span><br>
								We’re known for fast and friendly customer service. We work hard to make sure we live up to that reputation every day. <a href="testimonials">See how our customers rate our service</a>.</li>
								<li><span class="lead">Clarity is key</span><br>
								Buzzwords, lingo, and sensationalized sales and marketing speak have no place at Trippnology. We communicate clearly and honestly.</li>
								<li><span class="lead">The basics are beautiful</span><br>
								We’ll never overlook what really matters: The basics. Great service, honest pricing, and respect for our customer’s time, money, and trust.</li>
								<li><span class="lead">Websites needn't be complicated</span><br>
								We understand that not everybody is as geeky as we are. That's why the sites we build are easy to use and show off your products and services by giving your customers the best possible experience.</li>
							</ol>
						</div>
						<div class="span4">
							<ol start="5">
								<li><span class="lead">No hidden fees or secret prices</span><br>
								We believe everyone is entitled to the best price we can offer. Our prices are public, <a href="prices">published right here on our site</a>, and are the same no matter who you are.</li>
								<li><span class="lead">Green through and through</span><br>
								We run a paperless office and use a combination of public transport and human power for all our travel, meaning our carbon footprint is tiny.</li>
								<li><span class="lead">Our customers are our investors</span><br>
								Our customers fund our daily operations by paying for our services. We answer to them — not investors, the stock market, or a board of directors.</li>
								<li><span class="lead">We &hearts; the web</span><br>
								To us, the world wide web isn't just a marketing tool, it's our passion. When we're not crafting websites for customers, we're experimenting with new technologies, <a href="shed">making tools</a>, and learning every day.</li>
							</ol>
						</div>
					</div>
				<h2 class="center"><a href="contact">We would love to hear from you</a></h2>
				</article>


			</div><!-- /.span9 -->
			<div class="span3">
				<?php include "inc/nav-block.php"; ?>
			</div><!-- /.span3 -->
		</div>

		<div class="row">
			<div class="span12">
			<?php include "inc/footer.php"; ?>
			</div>
		</div>
    </div>
<?php include "scriptblock.php"; ?>

<!-- Put page specific script stuff here -->

<!-- End of page specific script stuff -->
</body>
</html>
