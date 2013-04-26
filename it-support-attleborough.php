<?php
include "inc/settings.php";

$strPageName = "IT Support Attleborough";
$strCanonical = "it-support-attleborough";
$strDescription = "Need IT support in Attleborough? We're here to help you make the most of your IT, save money and increase efficiency.";
$strKeywords = "it support, computer repair, attleborough, wymondham, norwich, thetford";
$SEOtitle = $strPageName . " | " . $siteName;
$pageSlug = "it-support";
$pageHeaderImageURL = "img/ui/headers/it-support-attleborough.jpg";
$pageHeaderImageURLSource = "https://secure.flickr.com/photos/mikebaird/2700278384/";
$strTweetText = $strPageName;

include "head.php";
?>

<body class="page-<?=$pageSlug?>">
	<?php include "inc/navbar.php"; ?>

	<header class="page-header roundlrg">
		<img src="<?=$pageHeaderImageURL?>" alt="IT support Attleborough header" class="roundlrg" data-sourceurl="<?=$pageHeaderImageURLSource?>">
		<div class="container">
			<div class="header-caption roundlrg">
				<h1 id="pagetitle"><a href="<?= $strCanonical ?>" title="<?= $strPageName ?>"><?= $strPageName ?></a></h1>
				<h2>Network down? Can't send emails? Whatever the problem, you're in safe hands.</h2>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="span9" id="main" role="main">
				<article>
					<h1>Things go wrong and technology can play up sometimes.</h1>
					<div class="well white span2 pull-right">
						<p><span class="lead">Bottom line:</span> IT downtime costs your business. If you need emergency IT support in Attleborough, we could be there within an hour!</p>
						<p><a class="btn btn-mini btn-success" href="contact">SEND HELP!</a></p>
					</div>
					<p>If something goes wrong with your IT, it can leave your staff unable to continue with their work. This where we come in, with our passion for problem solving. Our customers soon realise we are the people to call whenever issues crop up.</p>
					<p>We've built up a wealth of real world experience over many years of diagnosing problems with hardware, software (both off the shelf and bespoke), operating systems, networks, broadband and user behaviour. This experience allows us to quickly pinpoint the issue, minimising costly downtime.</p>
					<p>Hiring Trippnology to provide your IT support gives you access to our expertise at a <a href="prices">fraction of the cost</a> of employing full time staff. Both monthly contracts and ad-hoc support are available.</p>
					<h2 class="center">&ldquo;That's exactly what I need!&rdquo; <a href="contact" class="btn btn-large btn-success">SEND HELP!</a></h2>
				</article>

				<hr class="divider roundlrg">

				<article>
					<h1>Not just for the bad times!</h1>
					<div class="well white span2 pull-right">
						<p><span class="lead">Bottom line:</span> If you're looking to add some new equipment, improve your broadband or just need some advice, we're here to help.</p>
						<p><a class="btn btn-mini btn-success" href="contact">Let's talk »</a></p>
					</div>
					<p>We have our finger on the pulse of the IT world, keeping up to date with the latest hardware and software so you don't have to.</p>
					<p>If your business relies on the internet for it's daily operations, you need your connection to be reliable and for any faults that do occur, to be quickly rectified. Trippnology can order, install and setup business grade broadband, ensuring your business stays connected.</p>
					<p>Perhaps you're looking to expand and would like some purchasing advice? Or have some equipment that you're not using to it's full potential? We can help with that too, showing you the right tools for the job and making the most of your existing IT investment.</p>
					<h2 class="center">&ldquo;I need expert IT advice.&rdquo; <a  href="contact">Get in touch</a></h2>
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
