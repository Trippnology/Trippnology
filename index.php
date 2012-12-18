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
    <!-- Carousel -->
	<div id="homeCarousel" class="carousel slide">
		<div class="carousel-inner">
			<div class="item active">
				<img src="http://placekitten.com/1024/1024" alt="">
				<div class="container">
					<div class="carousel-caption">
						<h1>Web Design</h1>
						<p class="lead">Websites that get results and look good on all sorts of devices.</p>
						<a class="btn btn-large btn-primary" href="#">Give your business a web boost!</a>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="http://placekitten.com/1024/768" alt="">
				<div class="container">
					<div class="carousel-caption">
						<h1>Search Engine Optimisation</h1>
						<p class="lead">Turn searchers into visitors and visitors into customers.</p>
						<a class="btn btn-large btn-primary" href="#">Lets get your website out there!</a>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="http://placekitten.com/1024/768" alt="">
				<div class="container">
					<div class="carousel-caption">
						<h1>IT Support</h1>
						<p class="lead">Network gone down? Can't send emails? Printer gone kaboom? No worries, you're in safe hands.</p>
						<a class="btn btn-large btn-primary" href="#">Stop pulling your hair out!</a>
					</div>
				</div>
			</div>
		</div>
    	<a class="left carousel-control" href="#homeCarousel" data-slide="prev">‹</a>
    	<a class="right carousel-control" href="#homeCarousel" data-slide="next">›</a>
    </div><!-- /.carousel -->

    <div class="navbar-wrapper">
    	<div class="container">
			<?php include "inc/navbar.php"; ?>   		
    	</div>
    </div>

	<div class="container">
		<div class="row">
			<div class="span4">
				<div id="stuck" class="columnleft shadowleft roundlrg borderlight" data-spy="affix" data-offset-top="575">
					<?php 
					include "inc/menu-vert.php";
					include "inc/share.php";
					?>
				</div>
			</div>
			
			<div class="span8" id="main" role="main">
				<article class="readme">
					<img src="img/trippnology-logo-square-180.png" alt="Trippnology square logo" class="pull-right roundlrg">
					<h1>Web Design</h1>
					<p>Organic swag kogi cosby sweater, wes anderson forage semiotics craft beer keffiyeh pickled flexitarian +1 tattooed. You probably haven't heard of them pork belly fixie flexitarian, keffiyeh artisan organic carles narwhal. Aesthetic iphone wes anderson pork belly, odd future dreamcatcher kale chips banh mi quinoa artisan brunch seitan. Pinterest marfa biodiesel, vegan kogi high life four loko leggings godard before they sold out. Squid small batch organic +1, four loko forage pug stumptown raw denim post-ironic pour-over bushwick. Polaroid beard bushwick mustache tousled ethnic ennui, stumptown flannel next level sartorial keffiyeh +1 fashion axe. Yr salvia iphone swag leggings.</p>
					<h2>SEO</h2>
					<p>Ennui wayfarers cliche craft beer next level thundercats. Mixtape chambray hoodie, godard single-origin coffee jean shorts readymade post-ironic fixie fingerstache fap. Aesthetic forage single-origin coffee sartorial irony. Pop-up 90's semiotics, quinoa small batch blog street art. Terry richardson kogi helvetica, trust fund stumptown master cleanse raw denim umami direct trade try-hard. Mixtape 3 wolf moon seitan flannel. Mlkshk biodiesel pop-up dreamcatcher vegan, godard fixie seitan street art small batch sustainable lo-fi.</p>
					<h3>IT Support</h3>
					<p>Blue bottle cosby sweater messenger bag beard whatever. Art party selvage jean shorts scenester freegan 90's. Four loko cosby sweater sustainable shoreditch, terry richardson banksy thundercats banh mi Austin before they sold out semiotics umami narwhal skateboard. Wes anderson pickled art party, neutra whatever tousled banksy ennui brunch. Sustainable echo park small batch +1 DIY brunch, lomo master cleanse tattooed fap salvia skateboard. Keffiyeh skateboard chambray, semiotics sartorial narwhal blog stumptown artisan church-key organic gluten-free. Freegan scenester pug 8-bit locavore blue bottle beard, raw denim +1 post-ironic american apparel.</p>
					<h4>More cool stuff</h4>
					<p>Jean shorts godard organic pork belly trust fund locavore. Freegan farm-to-table vegan squid. Stumptown freegan portland occupy neutra, pickled wolf PBR cosby sweater wayfarers echo park art party fixie typewriter you probably haven't heard of them. Carles pop-up cred american apparel DIY, banksy flexitarian deep v next level. Tumblr skateboard keffiyeh, try-hard irony twee lomo bushwick carles art party organic bespoke artisan jean shorts chillwave. American apparel hella pour-over, craft beer high life mlkshk single-origin coffee locavore carles readymade odd future. Terry richardson 8-bit flexitarian thundercats chillwave wolf, cliche brunch irony pinterest hella readymade.</p>
					<h5>Custard Wrestling</h5>
					<p>8-bit small batch vinyl, brunch blue bottle pickled cliche pug forage kale chips. Vice iphone shoreditch +1 keffiyeh, narwhal butcher tonx umami gentrify art party beard. Aesthetic put a bird on it 8-bit, leggings godard try-hard yr. Art party american apparel retro echo park. Helvetica mlkshk gastropub, artisan tattooed banjo chambray. Banksy brooklyn wes anderson direct trade chambray irony. Vinyl tousled lo-fi bushwick deep v.</p>
					<p>Bushwick locavore bespoke, mixtape church-key fanny pack chillwave raw denim food truck PBR four loko direct trade master cleanse hella carles. Photo booth blog biodiesel, keytar bespoke before they sold out terry richardson. Salvia fingerstache vinyl, tousled terry richardson scenester vice 90's fixie. Direct trade 90's street art bushwick chambray. Ethical pitchfork keffiyeh, locavore deep v cardigan tonx irony bicycle rights hella pop-up forage narwhal sustainable. Portland vice readymade chambray, typewriter mustache mcsweeney's beard cray bespoke narwhal skateboard pitchfork neutra. Biodiesel flexitarian viral, typewriter banh mi cosby sweater mcsweeney's irony godard stumptown bespoke church-key vice forage +1.</p>
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

<!-- End of page specific script stuff -->
</body>
</html>