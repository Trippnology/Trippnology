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
				<img src="img/home/4150657215_a411d19e5e_b.jpg" alt="" data-sourceurl="https://secure.flickr.com/photos/manchester-monkey/4150657215/">
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
				<img src="img/home/2700278384_79bc7e21f9_b.jpg" alt="" data-sourceurl="https://secure.flickr.com/photos/mikebaird/2700278384/">
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
				<div class="featurette">
					<img class="featurette-image img-circle border-dark border-fat pull-right" src="img/home/code.png" alt="Web design screenshot">				
					<h2 class="featurette-heading">We build websites. <span class="muted">Pretty darn good ones too.</span></h2>
					<p class="lead">Driven by our passion for the web, we create user focussed sites that meet your needs and build your business. Find out more about our <a href="web-design-attleborough">web design</a> services or <a href="contact">contact us</a> today, we'd love to hear your plans.</p>
				</div>

				<hr class="divider roundsm">

				<div class="featurette">
					<img class="featurette-image pull-left" src="img/home/graph.png" alt="Graph">
					<h2 class="featurette-heading">Already got a website? <span class="muted">Lets make it better.</span></h2>
					<p class="lead">All websites need a little maintenance over time as content gets updated and new technologies emerge. With our <a href="search-engine-optimisation">search engine optimisation</a> service, your site will bring in more visitors, which means more customers!</p>
				</div>

				<hr class="divider roundsm">

				<div class="featurette">
					<img class="featurette-image img-circle border-dark border-fat pull-right" src="img/home/it-support.jpg" alt="IT Support">
					<h2 class="featurette-heading">Fed up with IT problems? <span class="muted">We're here to help.</span></h2>
					<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
				</div>

				<hr class="divider roundsm">

				<div class="featurette">
					<!-- Move to About page -->
					<h1>You know your business. We know the web. Let's get together and make something great!</h1>
					<div class="span4">
						<ol class="lead">
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
						<ol start="5" class="lead">
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
				<!-- /END THE FEATURETTES -->

				<!-- Three columns of text boxes -->
				<div class="row">
					<div class="span3">
						<img class="img-circle" src="img/home/code.png" width="140" height="140">
						<h2>Web Design</h2>
						<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
						<p><a class="btn" href="#">View details »</a></p>
					</div><!-- /.span4 -->
					<div class="span3">
						<img class="img-circle" src="img/home/graph.png" width="140" height="140">
						<h2>SEO</h2>
						<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
						<p><a class="btn" href="#">View details »</a></p>
					</div><!-- /.span4 -->
					<div class="span3">
						<img class="img-circle border-dark border-fat" src="img/home/it-support.jpg" width="140" height="140">
						<h2>IT Support</h2>
						<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
						<p><a class="btn" href="#">View details »</a></p>
					</div><!-- /.span4 -->
				</div><!-- /.row -->
			</div><!-- /.span9 -->
			<div class="span3">
				<div id="stuck" class="columnleft shadowright roundlrg border-light clearfix" data-spy="affix" data-offset-top="590">
					<img src="img/trippnology-logo-square-180.png" alt="Trippnology logo" class="roundlrg aligncenter">
					<?php include "inc/menu-vert.php"; ?>
					<hr class="divider roundsm">
					<p class="contact-info">t: 01953 451231<br>
						e: mail@trippnology.com</p>
					<ul class="inline social-links">
						<li><a rel="external" href="http://twitter.com/Trippnology" class="twitter tooltip-top" title="twitter"><span>twitter</span></a></li>
						<li><a rel="external" href="https://github.com/Trippnology" class="github"><span>github</span></a></li>
						<li><a rel="external" href="http://bitbucket.org/Trippnology" class="bitbucket"><span>bitbucket</span></a></li>
						<li><a rel="external" href="http://facebook.com/Trippnology" class="facebook"><span>facebook</span></a></li>
					</ul>
				</div>
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
      $('#homeCarousel').carousel();
    })
  }(window.jQuery)
</script>
<!-- End of page specific script stuff -->
</body>
</html>