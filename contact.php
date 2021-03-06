<?php
include "inc/settings.php";

$strPageName = "Contact Us";
$strCanonical = "contact";
$strDescription = "Contact us for high quality Web Design, SEO, IT Support and more.";
$strKeywords = "trippnology, attleborough, contact, support, technology, design, computer";
$SEOtitle = $strPageName . " | " . $siteName;
$pageSlug = "contact";
$pageHeaderImageURL = "img/ui/headers/trippnology-default.jpg";
$pageHeaderImageURLSource = "https://secure.flickr.com/photos/manchester-monkey/4150657215/";
$strTweetText = $strPageName;

include "head.php";
?>

<body class="page-<?=$pageSlug?>">
	<?php include "inc/navbar.php"; ?>

	<header class="page-header roundlrg">
		<img src="<?=$pageHeaderImageURL?>" alt="Contact Trippnology header" class="roundlrg" data-sourceurl="<?=$pageHeaderImageURLSource?>">
		<div class="container">
			<div class="header-caption roundlrg">
				<h1 id="pagetitle"><a href="<?= $strCanonical ?>" title="<?= $strPageName ?>"><?= $strPageName ?></a></h1>
				<h2>We would love to hear your plans. Send us a message!</h2>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="span3">
				<article class="center hidden-phone qrcode">
					<img class="img-polaroid" src="img/ui/contact-details-qrcode.png" alt="Trippnology contact details QR code">
					<p><i class="icon-barcode"></i> Scan this code to add contact info to your phone, call us, or get directions.</p>
				</article>
			</div>

			<div class="span4 offset1" id="main" role="main">
				<article class="well center white animated bounceInUp">
					<span itemscope itemtype="http://schema.org/Brand"><img src="img/ui/trippnology-logo-square-360.png" class="img-polaroid roundlrg" alt="Contact <?=$siteName?>" itemprop="logo"></span>
					<section itemscope itemtype="http://schema.org/LocalBusiness">
						<h2><span itemprop="name"><?=$siteName?></span></h2>
						<p><span itemprop="description"><?=$siteTagline?></span></p>
						<p>Email: <span itemprop="email" class="antispam">mail [at] trippnology.com</span></p>
						<p>Phone: <span itemprop="telephone"><a href="tel:+44-1953-451231">01953 451231</a></span><br>
							Mobile: <a href="tel:+44-7564-730357">07564 730357</a></p>
						<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
							<p><span itemprop="streetAddress">Besthorpe Lodge</span><br>
							<span itemprop="addressLocality">Attleborough</span><br>
							<span itemprop="addressRegion">Norfolk</span><br>
							<span itemprop="postalCode">NR17 2LJ</span><br>
							</p>
						</div>
						<p class="center"><a rel="external" itemprop="map" href="https://maps.google.co.uk/maps?ie=UTF8&amp;cid=17370591561013489825&amp;q=Trippnology&amp;gl=GB&amp;hl=en&amp;t=m&amp;iwloc=A&amp;ll=52.519416,1.047000&amp;spn=0.007000,0.007000&amp;output=embed" class="badge popup-map"><i class="icon-map-marker icon-white"></i> Map</a></p>
						<p><a itemprop="url" href="<?=$siteDomain?>"><?=$siteDomain?></a></p>
					</section>
					<?php include "inc/social-links.php"; ?>
				</article>
			</div>

			<div class="span3 offset1">
				<div class="center">
					<img class="featurette-image-mini" src="img/ui/hi-icon-256.png" alt="Hi icon">
				</div>
				<article class="center">
					<form id="contactForm" class="form-vertical">
						<label for="name">Name</label>
						<input name="name" id="name" type="text" required="required" placeholder="Your name">
						<label for="email">Email</label>
						<input name="email" id="email" type="email" class="email" required="required" placeholder="you@example.com">
						<label for="telephone">Telephone</label>
						<input name="telephone" id="telephone" type="text" placeholder="(optional)">
						<label for="message">Your Message</label>
						<textarea name="message" id="message" cols="45" rows="5" class="required" placeholder="How can we help?"></textarea>
						<br>
						<div class="contact-result roundlrg"></div>
						<input id="submitform" type="submit" value="send" class="btn btn-success">
					</form>
				</article>
			</div>
		</div>

		<div class="row">
			<div class="span12">
			<?php include "inc/footer.php"; ?>
			</div>
		</div>
    </div>
<?php include "scriptblock.php"; ?>

<!-- Put page specific script stuff here -->
<script>
	$("#main").antiSpam("antispam");

	$("#submitform").click(function() {
		var name = $("#name").val();
		var email = $("#email").val();
		var telephone = $("#telephone").val();
		var message = $("#message").val();
		$.getJSON("sendform.php?name=" + name + "&email=" + email + "&telephone=" + telephone + "&message=" + message,function(result){
			$(".contact-result").html(result.content).css({ display: "block" });
		});
		return false;
	});
</script>
<!-- End of page specific script stuff -->
</body>
</html>
