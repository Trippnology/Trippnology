<?php 
include "inc/settings.php";

$strPageName = "About Trippnology";
$strCanonical = "about";
$strDescription = "All about Trippnology are why we're the right choice for your business.";
$strKeywords = "trippnology, green, ethical";
$SEOtitle = $strPageName . " | " . $siteName;
$pageSlug = "about";
$strTweetText = $strPageName;

include "head.php";
?>

<body class="page-<?=$pageSlug?>">
	<?php include "inc/navbar.php"; ?>

	<div class="container">		
		<div class="row">
			<div class="span8 offset1" id="main" role="main">
				<article>
					<div class="row">
						<h1 id="pagetitle"><a href="<?= $strCanonical ?>" title="<?= $strPageName ?>"><?= $strPageName ?></a></h1>
						<h2>You know your business. We know the web. Let's get together and make something great!</h2>
						<div class="span4">
							<ol>
								<li><span class="lead">Useful is forever</span><br>
								Bells and whistles wear off, but usefulness never does. We build useful software that does just what you need and nothing you don’t.</li>
								<li><span class="lead">Great service is everything</span><br>
								We’re famous for fast and friendly customer service. We work hard to make sure we live up to that reputation every day. <a href="testimonials">See how our customers rate our service</a>.</li>
								<li><span class="lead">Clarity is king</span><br>
								Buzzwords, lingo, and sensationalized sales-and-marketing-speak have no place at 37signals. We communicate clearly and honestly.</li>
								<li><span class="lead">Our customers are our investors</span><br>
								Our customers fund our daily operations by paying for our products. We answer to them — not investors, the stock market, or a board of directors.</li>
							</ol>
						</div>
						<div class="span4">
							<ol start="5">
								<li><span class="lead">The basics are beautiful</span><br>
								We’ll never overlook what really matters: The basics. Great service, ease of use, honest pricing, and respect for our customer’s time, money, and trust.</li>
								<li><span class="lead">No hidden fees or secret prices</span><br>
								We believe everyone is entitled to the best price we can offer. Our prices are public, published right on our site, and the same no matter who you are.</li>
								<li><span class="lead">Software should be easy</span><br>
								Our products are intuitive. You’ll pick them up in seconds or minutes, not hours, days or weeks. We don’t sell you training because you don’t need it.</li>
								<li><span class="lead">Long-term contracts are obscene</span><br>
								No one likes being locked into something they don’t want anymore. Our customers can cancel at any time, no questions asked. No setup/termination fees either.</li>
							</ol>
						</div>
					</div>
				</article>
			</div><!-- /.span8 -->
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