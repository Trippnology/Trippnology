<?php
include "inc/settings.php";

$strPageName = "Web design and IT support pricing";
$strCanonical = "prices";
$strDescription = "Extremely competitive pricing for web design and IT support. Contact us today!";
$strKeywords = "IT support, web design, pricing, attleborough";
$SEOtitle = $strPageName . " | " . $siteName;
$pageSlug = "prices";
$pageHeaderImageURL = "img/ui/headers/trippnology-default.jpg";
$pageHeaderImageURLSource = "https://secure.flickr.com/photos/manchester-monkey/4150657215/";
$strTweetText = $strPageName;

include "head.php";
?>

<body class="page-<?=$pageSlug?>">
	<?php include "inc/navbar.php"; ?>

	<header class="page-header roundlrg">
		<img src="<?=$pageHeaderImageURL?>" alt="Web design and IT support pricing header" class="roundlrg" data-sourceurl="<?=$pageHeaderImageURLSource?>">
		<div class="container">
			<div class="header-caption roundlrg">
				<h1 id="pagetitle"><a href="<?= $strCanonical ?>" title="<?= $strPageName ?>"><?= $strPageName ?></a></h1>
				<h2>No hidden fees or secret prices</h2>
				<p>We believe everyone is entitled to the best price we can offer.<br>Our prices are public, published right on our site, and the same no matter who you are.</p>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="span9" id="main" role="main">
				<ul class="nav nav-tabs">
					<li class="active"><a class="scrollme" data-toggle="tab" href="#web-design">Web design</a></li>
					<li><a class="scrollme" data-toggle="tab" href="#seo">SEO</a></li>
					<li><a class="scrollme" data-toggle="tab" href="#web-hosting">Web hosting</a></li>
					<li><a class="scrollme" data-toggle="tab" href="#domain-names">Domain names</a></li>
					<li><a class="scrollme" data-toggle="tab" href="#it-support">IT Support</a></li>
					<li><a class="scrollme" data-toggle="tab" href="#service-area">Service area</a></li>
				</ul>

				<article id="web-design">
					<h1>Web design and other web services</h1>
					<p><a href="web-design-attleborough">Web design</a>, updates, ammendments, technical changes etc. - <strong>£35</strong> per hour.</p>
					<p>Due to it's bespoke nature, <a href="web-design-attleborough">website design</a> quotes are based on your individual requirements. Please <a href="contact">contact us</a> for a chat, we would love to hear your plans.</p>
					<p>We recommend starting with a <a href="web-design-attleborough#project-assessment">project assessment</a> which includes an hour meeting with you and then a full breakdown of the work to be carried out. This service is billed at £100 but is included free of charge if you go ahead with the project.</p>
					<p>How much does it cost to make a website?</p>
					<table class="table price-table-web">
						<tr>
							<th style="width:10%"></th>
							<th style="width:20%;" colspan="2">£1000</th>
							<th style="width:20%;" colspan="2">£2000</th>
							<th style="width:20%;" colspan="2">£3000</th>
							<th style="width:20%;" colspan="2">£4000</th>
							<th style="width:10%"></th>
						</tr>
						<tr>
							<td style="width:10%" class="burgundy">Logos and brands</td>
							<td style="width:10%" class="grape">A simple website</td>
							<td style="width:30%" class="brightorange" colspan="3">A website with a bit where you can log in and change the content on the page.</td>
							<td style="width:30%" class="lightorange" colspan="3">A larger website where you can list and sell things.</td>
							<td style="width:20%" class="grey" colspan="2">*A mucky website with videos of muffs, knockers and winkies.</td>
						</tr>
					</table>
					<p>*We've never built one of these, we just threw it in for a bit of spice.</p>
					<h2 id="seo">SEO</h2>
					<p>All <a href="search-engine-optimisation-attleborough">search engine optimisation</a> work is charged at our standard web service rate - <strong>£35</strong> per hour.</p>
				</article>

				<hr id="web-hosting" class="divider roundsm">

				<article>
					<h1>Web Hosting</h1>
					<p>Our all-in-one web hosting solution.</p>
					<p>All this for just <strong>&pound;6.99 per month</strong> with <strong>FREE setup</strong>.</p>
					<table class="table table-condensed">
						<tr>
							<th>Webspace</th>
							<td>Unlimited</td>
						</tr>
						<tr>
							<th>Monthly traffic</th>
							<td>Unlimited</td>
						</tr>
						<tr>
							<th>Programming</th>
							<td>PHP 5, PHPDev, Zend Framework, Perl, Python, Ruby, SSI</td>
						</tr>
						<tr>
							<th>Geo-redundancy</th>
							<td>Your data is stored simultaneously in two high-tech data centres in two separate locations. Double security through geo-redundancy!</td>
						</tr>
						<tr>
							<th>MySQL Database</th>
							<td><i class="icon-ok"></i></td>
						</tr>
						<tr>
							<th>Secure Shell Access (SSH)</th>
							<td><i class="icon-ok"></i></td>
						</tr>
						<tr>
							<th>Version control</th>
							<td><i class="icon-ok"></i></td>
						</tr>
						<tr>
							<th>Subdomains</th>
							<td>Optional</td>
						</tr>
						<tr>
							<th>Dedicated SSL certificate</th>
							<td>Optional</td>
						</tr>
						<tr>
							<th>IMAP/POP3 Email accounts</th>
							<td>Unlimited</td>
						</tr>
						<tr>
							<th>Email storage (per account)</th>
							<td>2GB</td>
						</tr>
					</table>
					<p>Other options available <a href="contact">on request</a>.</p>
					<p>Confused? Read our blog post: <a href="http://blog.trippnology.com/what-is-web-hosting-and-why-do-i-need-it/">What is web hosting and why do I need it?</a></p>
					<h2 id="domain-names">Domain names</h2>
					<ul class="unstyled">
						<li>.co.uk - <strong>£20 per 2 years</strong></li>
						<li>.net/.org/.com - <strong>£20 per 1 year</strong></li>
						<li>Others - <strong>POA</strong></li>
					</ul>
				</article>

				<hr id="it-support" class="divider roundsm">

				<article>
					<h1>Ad-hoc IT support and computer repair</h1>
					<div class="well white pull-right span2">
						<p>While our pricing is good, our customer service is outstanding.</p>
						<p><a href="testimonials" class="btn btn-mini">Our customers agree!</a></p>
					</div>
					<p><strong>Business Hours</strong> 09:00-18:00<br>
				    Domestic customers: <strong>£25 Callout</strong><a href="#callout" class="tooltip-top" title="Includes first hour. Callout charges may be higher than stated based on your location - please double check with us first.">*</a> thereafter <strong>£20 per hour</strong><a href="#hourly" class="tooltip-top" title="Billed in 15 minute intevals.">**</a>.<br>
				    Commercial customers: <strong>£40 Callout</strong><a href="#callout" class="tooltip-top" title="Includes first hour. Callout charges may be higher than stated based on your location - please double check with us first.">*</a> thereafter <strong>£35 per hour</strong><a href="#hourly" class="tooltip-top" title="Billed in 15 minute intevals.">**</a>.</p>
					<p><strong>Outside Business Hours</strong> 18:00-09:00 <br>
				    Domestic customers: <strong>£30 Callout</strong><a href="#callout" class="tooltip-top" title="Includes first hour. Callout charges may be higher than stated based on your location - please double check with us first.">*</a> thereafter <strong>£25 per hour</strong><a href="#hourly" class="tooltip-top" title="Billed in 15 minute intevals.">**</a>.<br>
				    Commercial customers: <strong>£55 Callout</strong><a href="#callout" class="tooltip-top" title="Includes first hour. Callout charges may be higher than stated based on your location - please double check with us first.">*</a> thereafter <strong>£45 per hour</strong><a href="#hourly" class="tooltip-top" title="Billed in 15 minute intevals.">**</a>.</p>

					<h2>Support contracts</h2>
					<p>Packages as detailed on the <a href="it-support-attleborough">IT Support</a> page. Prices are based on the total number of devices<a href="#devices" class="tooltip-top" title="The following items count as a Device: Desktop PC (including monitor), Laptop, Server, Printer, Scanner, Router, Hub, Wireless Access Point and other similar items.">**</a> to be covered. </p>
					<p>Remote Only Support<br>
					Up to 10 - <strong>£80 per month </strong><br>
					Up to 20 - <strong>£150 per month </strong><br>
					More than 20 - Please <a href="contact">contact us</a>.</p>
					<p>Full On Site Support <br>
						Up to 10 - <strong>£150 per month </strong><br>
						Up to 20 - <strong>£280 per month </strong><br>
						More than 20 - Please <a href="contact">contact us</a>.</p>
					<p>24/7 On Site Support<br>
					Up to 10 - <strong>£250 per month </strong><br>
					Up to 20 - <strong>£475 per month </strong><br>
					More than 20 - Please <a href="contact">contact us</a>.</p>
					<h3>Notes</h3>
					<p id="callout">* Includes first hour. Callout charges may be higher than stated based on your location - please double check with us first.</p>
					<p id="hourly">** Billed in 15 minute intevals</p>
					<p id="devices">*** The following items count as a Device: Desktop PC (<strong>including</strong> monitor), Laptop, Server, Printer, Scanner, Router, Hub, Wireless Access Point and other similar items. </p>
				</article>

				<hr id="service-area" class="divider roundsm">

				<article>
					<h1>Our Service Area</h1>
					<p>We mainly serve <span itemscope itemtype="http://schema.org/Place" itemprop="name">Attleborough</span>, <span itemscope itemtype="http://schema.org/Place" itemprop="name">Wymondham</span>, <span itemscope itemtype="http://schema.org/Place" itemprop="name">Norwich</span> and <span itemscope itemtype="http://schema.org/Place" itemprop="name">Thetford</span> but we also cover surrounding towns and villages. The map below serves as a rough guide.</p>
		            <div id="googlemap">
						<iframe width="100%" scrolling="no" height="500" frameborder="0" src="http://maps.google.co.uk/maps?cid=17370591561013489825&amp;ssa=1&amp;ie=UTF8&amp;hq=+loc:+&amp;hnear=&amp;source=embed&amp;ll=52.538703,1.005369&amp;spn=0.292462,0.673827&amp;iwloc=A&amp;output=embed" marginwidth="0" marginheight="0"></iframe>
		                <p><a target="_blank" href="http://maps.google.co.uk/maps?cid=17370591561013489825&amp;ssa=1&amp;ie=UTF8&amp;hq=+loc:+&amp;hnear=&amp;source=embed&amp;ll=52.538703,1.005369&amp;spn=0.292462,0.673827&amp;iwloc=A">View Larger Map</a></p>
		            </div>
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
