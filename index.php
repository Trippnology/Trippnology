<?php
include "inc/settings.php";

$strPageName = "Home";
$strCanonical = "index.php";
$strDescription = "Quality Web design, SEO and IT support for small business' in Norfolk.";
$strKeywords = "web design, seo, it support, attleborough, norfolk";
$SEOtitle = "Website design, SEO & IT support | " . $siteName;
$pageSlug = "home";

include "head.php";
?>

<body class="page-<?=$pageSlug?>">
	<?php include "inc/navbar.php"; ?>

    <!-- Carousel -->
	<div id="homeCarousel" class="carousel slide roundsm">
		<div class="carousel-inner roundsm">
			<div class="item active">
				<img src="img/ui/headers/web-design-attleborough.jpg" alt="Web design Attleborough header" data-sourceurl="http://www.flickr.com/photos/fdecomite/1457493536/">
				<div class="container">
					<div class="carousel-caption">
						<h1>Web Design</h1>
						<p class="lead">Clear, functional websites that get results and look good on all kinds of devices.</p>
						<a class="btn btn-large btn-burgundy" href="web-design-attleborough">Give your business a web boost!</a>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="img/ui/headers/seo-attleborough.jpg" alt="SEO Attleborough header" data-sourceurl="https://secure.flickr.com/photos/waferboard/4204140740/">
				<div class="container">
					<div class="carousel-caption">
						<h1>Search Engine Optimisation</h1>
						<p class="lead">Turn searchers into visitors and visitors into customers.</p>
						<a class="btn btn-large btn-grape" href="#">Lets get your website out there!</a>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="img/ui/headers/it-support-attleborough.jpg" alt="IT support Attleborough header" data-sourceurl="https://secure.flickr.com/photos/mikebaird/2700278384/">
				<div class="container">
					<div class="carousel-caption">
						<h1>IT Support</h1>
						<p class="lead">Network down? Can't send emails? Printer gone kaboom? No worries, you're in safe hands.</p>
						<a class="btn btn-large btn-grape" href="#">Stop pulling your hair out!</a>
					</div>
				</div>
			</div>
		</div>
    	<a class="left carousel-control" href="#homeCarousel" data-slide="prev">‹</a>
    	<a class="right carousel-control" href="#homeCarousel" data-slide="next">›</a>
    </div><!-- /.carousel -->

	<div class="container">
		<div class="row">
			<div class="span9 marketing" id="main" role="main">
				<!-- START THE FEATURETTES -->
				<div class="featurette row">
					<div class="span6">
						<h2 class="featurette-heading">We build websites. <span class="muted">Pretty darn good ones too.</span></h2>
						<p class="lead">Driven by our passion for the web, we create user focussed sites that meet your needs and build your business. Find out more about our <a href="web-design-attleborough">web design</a> services or <a href="contact">contact us</a> today, we'd love to hear your plans.</p>
					</div>
					<div class="span3">
						<img class="featurette-image img-circle border-dark border-fat" src="img/ui/code.png" alt="Web design Attleborough icon">
					</div>
				</div>

				<hr class="divider roundsm">

				<div class="featurette row">
					<div class="span3">
						<img class="featurette-image pull-left img-circle border-dark border-fat" src="img/ui/graph.png" alt="SEO Attleborough icon">
					</div>
					<div class="span6">
						<h2 class="featurette-heading">Already got a website? <span class="muted">Let's make it better.</span></h2>
						<p class="lead">All websites need a little maintenance over time as content gets updated and new technologies emerge. With our <a href="search-engine-optimisation-attleborough">search engine optimisation</a> service, your site will bring in more visitors, which means more customers!</p>
					</div>
				</div>

				<hr class="divider roundsm">

				<div class="featurette row">
					<div class="span6">
						<h2 class="featurette-heading">Fed up with IT problems? <span class="muted">We're here to help.</span></h2>
						<p class="lead">IT downtime costs your business. Our years of experience mean we get your issues resolved quickly, so you can get back to work. Find out more about how our <a href="it-support-attleborough">IT support</a> services will make you more productive.</p>
					</div>
					<div class="span3">
						<img class="featurette-image img-circle border-dark border-fat" src="img/ui/it-support.jpg" alt="IT support Attleborough icon">
					</div>
				</div>
			</div><!-- /.span9 -->

			<div class="span3">
				<?php include "inc/nav-block.php"; ?>
			</div><!-- /.span3 -->
		</div><!-- /.row -->
	</div><!-- /.container -->

	<div class="container">
		<div class="row">
			<div class="span12">
				<?php include "inc/footer.php"; ?>
			</div>
		</div>
	</div>
<?php include "scriptblock.php"; ?>

<!-- Put page specific script stuff here -->
<script>
  !function ($) {
    $(function(){
      $('#homeCarousel').carousel({
      	interval: 5000
      });
    })
  }(window.jQuery)
</script>
<!-- End of page specific script stuff -->
</body>
</html>
