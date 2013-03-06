<?php 
include "inc/settings.php";

$strPageName = "Contact Us";
$strCanonical = "contact";
$strDescription = "Contact us for high quality Web Design, SEO, IT Support and more.";
$strKeywords = "trippnology, attleborough, contact, support, technology, design, computer";
$SEOtitle = $strPageName . " | " . $siteName;
$pageSlug = "contact";
$strTweetText = $strPageName;

include "head.php";
?>

<body class="page-<?=$pageSlug?>">
	<?php include "inc/navbar.php"; ?>   		

	<header class="page-header">
		<img src="img/home/4150657215_a411d19e5e_b.jpg" alt="" data-sourceurl="https://secure.flickr.com/photos/manchester-monkey/4150657215/">
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
			<div class="span7 offset1" id="main" role="main">
				<article class="well">
					<h1 id="pagetitle"><a href="<?=$strCanonical?>" title="<?=$strPageName?>"><?=$strPageName?></a></h1>
					<img src="img/trippnology-logo-square-180.png" width="180" height="180" class="pull-right roundsm" alt="Contact <?=siteName?>">
					<section itemscope itemtype="http://schema.org/LocalBusiness">
						<h2><span itemprop="name"><?=$siteName?></span></h2>
						<p><span itemprop="description"><?=$siteTagline?></span></p>
		                <p>Email: <span itemprop="email">mail<a href="#" title="Antispam" data-content="Replace this with the usual @ symbol. This is just to stop us getting lots of spam email." class="antispam">[at]</a>trippnology.com</span></p>
						<p>Phone: <span itemprop="telephone"><a href="tel:+44-1953-451231">01953 451231</a></span></p>
						<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
							<p><span itemprop="streetAddress">Besthorpe Lodge</span><br>
							<span itemprop="addressLocality">Attleborough</span><br>
							<span itemprop="addressRegion">Norfolk</span><br>
							<span itemprop="postalCode">NR17 2LJ</span><br>
							<a href="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=trippnology&amp;aq=&amp;sll=52.8382,-2.327815&amp;sspn=10.921321,27.13623&amp;ie=UTF8&amp;hq=trippnology&amp;hnear=&amp;t=m&amp;cid=17370591561013489825&amp;z=13&amp;iwloc=A&amp;output=embed" class="badge popup-map"><i class="icon-map-marker"></i> Map</a>
							</p>
						</div>
						<p><a itemprop="url" href="<?=$siteDomain?>"><?=$siteDomain?></a></p>
				    </section>
	                <p><a href="http://twitter.com/<?=$socialTwitterName?>" rel="external" title="Follow <?=$siteName?> on twitter">Twitter</a> - <a href="<?=$socialFacebookURL?>" rel="external" title="Like <?=$siteName?> on Facebook">Facebook</a></p>
				</article>
			</div>
			<div class="span3">
				<article class="well">
					<form action="formtoemail.php" method="post" id="contactForm" class="form-vertical">
						<label for="Name">Name</label>
						<input name="Name" id="Name" type="text" class="required">
						<label for="Email">Email</label>
						<input name="Email" id="Email" type="email" class="required email">
						<label for="Telephone">Telephone</label>
						<input name="Telephone" id="Telephone" type="text">
						<label for="Message">Your Message</label>
						<textarea name="Message" id="Message" cols="45" rows="5" class="required"></textarea>
						<br>
						<input id="submit" type="submit" value="Send" class="btn btn-success">
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
	$('.antispam').popover({
		'placement' : 'top',
		'trigger' : 'hover',
		'delay' : { show: 100, hide: 1000 }
	});
	$(".popup-map").fancybox({
		'width' : '75%',
		'height' : '75%',
		'autoScale' : false,
		'transitionIn' : 'fade',
		'transitionOut' : 'fade',
		'type' : 'iframe'
	}); 
</script>
<!-- End of page specific script stuff -->
</body>
</html>