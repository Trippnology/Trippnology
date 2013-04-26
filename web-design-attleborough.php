<?php
include "inc/settings.php";

$strPageName = "Web Design Attleborough";
$strCanonical = "web-design-attleborough";
$strDescription = "Bare minimum of components.";
$strKeywords = "keyword1, keyword2, keyword3";
$SEOtitle = $strPageName . " | Website Design Attleborough | " . $siteName;
$pageSlug = "web-design";
$pageHeaderImageURL = "img/ui/headers/1457493536_f344795d7a_b.jpg";
$pageHeaderImageURLSource = "http://www.flickr.com/photos/fdecomite/1457493536/";
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
				<h2>You know your business. We know the web.<br>Let's get together and make something great!</h2>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="span9" id="main" role="main">
				<article>
					<div class="row">
						<div class="span3">
							<p>A website gives you one shot at making an impression. If people find it difficult to read or spend ages waiting for information to download, they’ll close their browser and you’ll probably never hear from them again.</p>
							<p>We plan, design and build websites that collect customers rather than losing them. Created with</p>
						</div>
						<div class="span3">
							<p>Search Engine Optimisation (<a href="search-engine-optimisation-attleborough">SEO</a>) in mind to help drive traffic, our sites retain interest using eye-catching writing and website design that is easy to read and navigate.</p>
							<p>As part of our website development service, all sites are tested across different browsers and platforms and structured so that visits are converted into sales or meeting requests.</p>
						</div>
						<div class="span3">
							<p>We can also provide full content management systems so your site is easy to update, a social media strategy to start you off on Twitter or Facebook and help with hosting and buying a domain name.</p>
							<p>There are 51 million internet users in the UK right now.</p>
							<p><a href="contact">Make sure more of them start visiting your site.</a></p>
						</div>
					</div><!-- /.row -->
				</article>

				<article>
					<div class="row intro">
						<div class="span3">
							<img class="img-circle border-dark border-fat" src="img/ui/code-small.png" alt="project assessment" width="140" height="140">
							<h2>Brand new project</h2>
							<p>Need a website but don't know where to start? Our project assessment will get you on the right track.</p>
							<p><a class="btn scrollme" href="#project-assessment">Find out more »</a></p>
						</div>
						<div class="span3">
							<img class="img-circle border-dark border-fat" src="img/ui/graph-small.png" alt="website updates" width="140" height="140">
							<h2>Website updates</h2>
							<p>Do you already have a website that needs some TLC? We can breathe new life into your stale old site.</p>
							<p><a class="btn scrollme" href="#website-updates">View details »</a></p>
						</div>
						<div class="span3">
							<img class="img-circle border-dark border-fat" src="img/ui/portfolio-small.png" alt="it support" width="140" height="140">
							<h2>Portfolio</h2>
							<p>Have a look at some of the sites we have built for previous customers and see the quaility of our work for yourself.</p>
							<p><a class="btn scrollme" href="#portfolio">View »</a></p>
						</div>
					</div><!-- /.row -->
				</article>

				<hr id="project-assessment" class="divider roundsm">

				<article>
					<h1>Project Assessment</h1>
					<div class="well white span2 pull-right">
						<p><span class="lead">Bottom line:</span> We assess your idea and give you a plan to make it a reality. If you go ahead with the project, this service is free of charge.</p>
						<p><a href="contact" class="btn btn-mini btn-success">Let's talk »</a></p>
					</div>
					<p>A project assessment, as we’ve defined it, is a detailed plan for the work that is to be done on a project, and explains how we do it. We eliminate the guess work, and detail the project out to such a level that this document becomes a living part of the development process, being referred back to and acting as the guide towards the project’s successful completion.</p>
					<p>These details are valuable to both you (in making sure you know exactly what you’re getting) and to us (in making sure that we know exactly what we need to deliver).</p>
					<p>Before we can build you a website, we need to know what it is that you have in mind. The only way to give you an accurate quote is to understand what your needs are and what you are trying to achieve. You may not know this yourself initially but we'll talk you through it and help you set appropiate goals.</p>
					<p>Putting this together takes time and includes a 1 hour meeting with you (in person or via the web) so we do charge for this. Once you have your completed project assessment, you are under no obligation to go ahead with the build but if you do, the cost of the assessment will be refunded.</p>
					<p><a href="contact">Contact us</a> today and let's get the ball rolling!</p>
				</article>

				<hr id="website-updates" class="divider roundsm">

				<article>
					<h1>Website Updates</h1>
					<div class="well white span2 pull-right">
						<p><span class="lead">Bottom line:</span> We can bring your current website up to scratch and make it mobile friendly.</p>
						<p><a href="contact" class="btn btn-mini btn-success">Let's talk »</a></p>

					</div>
					<p>As users of the web, we're no longer chained to our desks. The use of smartphones and tablets is soaring and many older websites have problems displaying on mobile devices and in some cases, are entirely broken.</p>
					<p>The landcape of the web is ever changing. New technologies emerge and with hindsight, we sometimes realise that the way we built the web in the past was less than ideal. For example, the <code>&lt;table&gt;</code> element (intended for displaying tabular data) used to be abused to privide page layout. Yuck.</p>
					<p>Here's where we come in. We'll fix up those old pages and make sure your customers aren't frustrated when using your site. We'll bring your website up to modern standards and make it more accessible to everyone.</p>
					<p><a href="contact">Contact us</a> today and let's get rid of those cobwebs!</p>
				</article>

				<hr id="portfolio" class="divider roundsm">

				<article>
					<div class="row">
						<div class="span3">
							<h1>Portfolio</h1>
						</div>
						<div class="well white span6">
							<p><span class="lead">Key:</span> <i class="icon-tags"></i> = HTML5 | <i class="icon-resize-full"></i> = Responsive | <i class="icon-shopping-cart"></i> = eCommerce | <i class="icon-pencil"></i> = Wordpress</p>
						</div>
					</div>
					<ul class="portfolio thumbnails">
						<li>You need to <a href="http://www.enable-javascript.com/" rel="external">enable javascript</a> to view this bit of the site. <a href="contact">give us a shout</a> if you have any trouble.</li>
					</ul>
				</article>

				<article>
					<h1>Areas we work in most often:</h1>
					<ul class="inline lead">
						<li itemscope itemtype="http://schema.org/Place"><span itemprop="name">Attleborough</span></li>
						<li itemscope itemtype="http://schema.org/Place"><span itemprop="name">Wymondham</span></li>
						<li itemscope itemtype="http://schema.org/Place"><span itemprop="name">Norwich</span></li>
						<li itemscope itemtype="http://schema.org/Place"><span itemprop="name">Thetford</span></li>
					</ul>
				</article>

				<article>
					<h1>Technology we use to build the web:</h1>
					<ul class="inline">
						<li>HTML5</li>
						<li>CSS3</li>
						<li>Javascript</li>
						<li>PHP</li>
						<li>jQuery</li>
						<li>Wordpress</li>
						<li>Node.js</li>
						<li>MySQL</li>
						<li>MongoDB</li>
						<li>AJAX</li>
						<li>JSON</li>
						<li>XML</li>
					</ul>
				</article>
			</div><!-- /#main -->

			<div class="span3">
				<?php include "inc/nav-block.php"; ?>
			</div><!-- /.span3 -->
		</div>

		<div class="row">
			<div class="span12">
			</div>
		</div>

		<div class="row">
			<div class="span12">
				<?php include "inc/footer.php"; ?>
			</div>
		</div>
    </div>

	<?php include "scriptblock.php"; ?>
	<script src="js/portfolio.js"></script>

</body>
</html>
