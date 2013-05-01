<?php
include "inc/settings.php";

$strPageName = "Privacy Policy";
$strCanonical = "privacy-policy";
$strDescription = "We've built a reputation of discretion, which is why we're trusted wholeheartedly by our customers.";
$strKeywords = "privacy policy, data, security";
$SEOtitle = $strPageName . " | " . $siteName;
$pageSlug = "privacy";
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
				<p class="lead">Trippnology are committed to vigorously protecting your privacy.</p class="lead">
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="span9" id="main" role="main">
				<article>
					<h1>Our Privacy Policy</h1>
					<p class="lead">We've built a reputation of discretion, which is why we're trusted wholeheartedly by our customers.</p>
					<ul>
						<li>We collect information about you for two reasons: for our contact database, and to improve our website.</li>
						<li>We will only use the information that we collect about you for our own internal use and will never pass any of your information to any third party without your prior consent.</li>
						<li>The type of information we will collect about you includes:
							<ul>
								<li>Your Name</li>
								<li>Address</li>
								<li>Phone Number</li>
								<li>Email Address</li>
							</ul>
						</li>
						<li>We will give you the chance to refuse any marketing email from us in the future.</li>
						<li>We do not store the financial information of our customers in any form (credit or debit card numbers).</li>
						<li>We will never collect sensitive information about you without your explicit consent.</li>
						<li>The information we hold will be accurate and up to date. You can request a copy of the information that we hold about you at any time. If you find any inaccuracies, we will correct or delete them promptly.</li>
						<li>The personal information which we hold will be stored securely in accordance with our internal security policy and the law.</li>
					</ul>
					<p>If you have any questions or comments about privacy, you should <a href="contact">contact us</a>, we are happy to discuss this with you further.</p>
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
