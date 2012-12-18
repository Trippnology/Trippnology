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
    <div class="navbar-wrapper">
    	<div class="container">
			<?php include "inc/navbar.php"; ?>   		
    	</div>
    </div>

    <!-- Carousel -->
	<div id="homeCarousel" class="carousel slide roundsm">
		<div class="carousel-inner roundsm">
			<div class="item active">
				<img src="img/home/2700278384_79bc7e21f9_b.jpg" alt="" data-sourceurl="https://secure.flickr.com/photos/mikebaird/2700278384/">
				<div class="container">
					<div class="carousel-caption">
						<h1>Web Design</h1>
						<p class="lead">Clear, functional websites that get results and look good on all kinds of devices.</p>
						<a class="btn btn-large btn-burgundy" href="#">Give your business a web boost!</a>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="img/home/4204140740_bce2b90dcf_o.jpg" alt="" data-sourceurl="https://secure.flickr.com/photos/waferboard/4204140740/">
				<div class="container">
					<div class="carousel-caption">
						<h1>Search Engine Optimisation</h1>
						<p class="lead">Turn searchers into visitors and visitors into customers.</p>
						<a class="btn btn-large btn-grape" href="#">Lets get your website out there!</a>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="img/bg/webtreats_red1.png" alt="">
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
			<div class="span3">
				<div id="stuck" class="columnleft shadowleft roundlrg borderlight" data-spy="affix" data-offset-top="585">
					<img src="img/trippnology-logo-square-180.png" alt="Trippnology logo" class="roundlrg aligncenter">
					<p class="btn button-menu" data-toggle="collapse" data-target="#menu-vert">Menu</p>
					<?php include "inc/menu-vert.php"; ?>
					<hr class="divider roundsm">
					<p class="contact-info">t: 01953 451231<br>
						e: mail@trippnology.com</p>
					<p class="social-links">
						<span class="badge">twitter</span>
						<span class="badge">github</span>
						<span class="badge">facebook</span>
					</p>
				</div>
			</div>
			
			<div class="span9 marketing" id="main" role="main">
				<!-- START THE FEATURETTES -->
				<div class="featurette">
					<!-- Placeholder/inspiration only -->
					<h1>We built the company that we’d want to do business with. We hope you do too.</h1>
					<div class="span4">
						<ol>
							<li>Useful is forever<br>
	Bells and whistles wear off, but usefulness never does. We build useful software that does just what you need and nothing you don’t.</li>
							<li>Great service is everything<br>
	We’re famous for fast and friendly customer service. We work hard to make sure we live up to that reputation every day. See how our customers rate our service</li>
							<li>Clarity is king<br>
	Buzzwords, lingo, and sensationalized sales-and-marketing-speak have no place at 37signals. We communicate clearly and honestly.</li>
							<li>Our customers are our investors<br>
	Our customers fund our daily operations by paying for our products. We answer to them — not investors, the stock market, or a board of directors.</li>
						</ol>
					</div>
					<div class="span4">
						<ol start="5">
							<li>The basics are beautiful<br>
	We’ll never overlook what really matters: The basics. Great service, ease of use, honest pricing, and respect for our customer’s time, money, and trust.</li>
							<li>No hidden fees or secret prices<br>
	We believe everyone is entitled to the best price we can offer. Our prices are public, published right on our site, and the same no matter who you are.</li>
							<li>Software should be easy<br>
	Our products are intuitive. You’ll pick them up in seconds or minutes, not hours, days or weeks. We don’t sell you training because you don’t need it.</li>
							<li>Long-term contracts are obscene<br>
	No one likes being locked into something they don’t want anymore. Our customers can cancel at any time, no questions asked. No setup/termination fees either.</li>
						</ol>
					</div>
				</div>

				<hr class="divider roundsm">

				<div class="featurette">
					<img class="featurette-image pull-right" src="bs/docs/assets/img/examples/browser-icon-chrome.png">
					<h2 class="featurette-heading">First featurette heading. <span class="muted">It'll blow your mind.</span></h2>
					<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
				</div>

				<hr class="divider roundsm">

				<div class="featurette">
					<img class="featurette-image pull-left" src="bs/docs/assets/img/examples/browser-icon-firefox.png">
					<h2 class="featurette-heading">Oh yeah, it's that good. <span class="muted">See for yourself.</span></h2>
					<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
				</div>

				<hr class="divider roundsm">

				<div class="featurette">
					<img class="featurette-image pull-right" src="bs/docs/assets/img/examples/browser-icon-safari.png">
					<h2 class="featurette-heading">And lastly, this one. <span class="muted">Checkmate.</span></h2>
					<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
				</div>

				<hr class="divider roundsm">
				<!-- /END THE FEATURETTES -->

				<!-- Three columns of text boxes -->
				<div class="row">
					<div class="span3">
						<img class="img-circle" data-src="holder.js/140x140">
						<h2>Web Design</h2>
						<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
						<p><a class="btn" href="#">View details »</a></p>
					</div><!-- /.span4 -->
					<div class="span3">
						<img class="img-circle" data-src="holder.js/140x140">
						<h2>SEO</h2>
						<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
						<p><a class="btn" href="#">View details »</a></p>
					</div><!-- /.span4 -->
					<div class="span3">
						<img class="img-circle" data-src="holder.js/140x140">
						<h2>IT Support</h2>
						<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
						<p><a class="btn" href="#">View details »</a></p>
					</div><!-- /.span4 -->
				</div><!-- /.row -->
			</div><!-- /.span9 -->
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
      // carousel demo
      $('#homeCarousel').carousel();
    })
  }(window.jQuery)
</script>
<!-- End of page specific script stuff -->
</body>
</html>