<?php 
include "inc/settings.php";

$strPageName = "Web Design Attleborough";
$strCanonical = "web-design-attleborough";
$strDescription = "Bare minimum of components.";
$strKeywords = "keyword1, keyword2, keyword3";
$SEOtitle = $strPageName . " | Website Design Attleborough | " . $siteName;
$pageSlug = "web-design";
$pageHeaderImageURL = "img/home/4150657215_a411d19e5e_b.jpg";
$pageHeaderImageURLSource = "https://secure.flickr.com/photos/manchester-monkey/4150657215/";
$strTweetText = $strPageName;

include "head.php";
?>

<body class="page-<?=$pageSlug?>">
	<?php include "inc/navbar.php"; ?>

	<header class="page-header">
		<img src="<?=$pageHeaderImageURL?>" alt="" data-sourceurl="<?=$pageHeaderImageURLSource?>">
		<div class="container">
			<div class="header-caption roundlrg">
				<h1 id="pagetitle"><a href="<?= $strCanonical ?>" title="<?= $strPageName ?>"><?= $strPageName ?></a></h1>
				<h2>You know your business. We know the web. Let's get together and make something great!</h2>
				<p class="lead">A business without a website today is like a business without a telephone 20 years ago.</p>
			</div>
		</div>
	</header>

	<div class="container">	
		<div class="row">
			<div class="span9" id="main" role="main">
				<article>
					<div class="row intro">
						<div class="span3">
							<img class="img-circle" src="img/home/code.png" width="140" height="140">
							<h2>Brand new project</h2>
							<p>Need a website but don't know where to start? Our project assessment will get you on the right track.</p>
							<p><a class="btn" href="#project-assessment">Find out more »</a></p>
						</div>
						<div class="span3">
							<img class="img-circle" src="img/home/graph.png" width="140" height="140">
							<h2>Website updates</h2>
							<p>Do you already have a website that needs some TLC? We can breathe new life into your stale old site.</p>
							<p><a class="btn" href="#website-updates">View details »</a></p>
						</div>
						<div class="span3">
							<img class="img-circle border-dark border-fat" src="img/home/it-support.jpg" width="140" height="140">
							<h2>Portfolio</h2>
							<p>Have a look at some of the sites we have built for previous customers and see the quaility of our work for yourself.</p>
							<p><a class="btn" href="#portfolio">View »</a></p>
						</div>
					</div><!-- /.row -->
				</article>

				<hr class="divider roundsm">

				<article id="project-assessment">
					<h1>Project Assessment</h1>
					<p>Before we can build you a website, we need to know what it is that you have in mind. The only way to give you an accurate quote is to understand what your needs are and what you are trying to achieve. You may not know this yourself initially but we'll talk you through it and help you set appropiate goals.</p>
					<p>A project assessment, as we’ve defined it, is a detailed plan for the work that is to be done on a project, and explains how we do it. We eliminate the guess work, and detail the project out to such a level that this document becomes a living part of the development process, being referred back to and acting as the guide towards the project’s successful completion.</p>
					<p>These details are valuable to both you (in making sure you know exactly what you’re getting) and to us (in making sure that we know exactly what we need to deliver).</p>
					<p>Putting this together takes time and includes a 1 hour meeting with you (in person or via the web) so we do charge for this. Once you have your completed project assessment, you are under no obligation to go ahead with the build but if you do, the cost of the assessment will be refunded.</p>
					<p><a href="contact">Contact us</a> today and let's get the ball rolling!</p>
				</article>

				<hr class="divider roundsm">

				<article id="website-updates">
					<h1>Website Updates</h1>
					<p>The landcape of the web is ever changing. New technologies emerge and with hindsight, we sometimes realise that the way we built the web in the past was less than ideal.</p>
					<p>As users of the web, we're no longer chained to our desks. The use of smartphones and tablets is soaring and many older websites have problems displaying on mobile devices and in some cases, are entirely broken. Here's where we come in. We'll fix up those old pages and make sure your customers aren't frustrated when using your site.</p>
					<p><a href="contact">Contact us</a> today and let's get rid of those cobwebs!</p>
				</article>

				<hr class="divider roundsm">

				<article id="portfolio">
					<h1>Portfolio</h1>
					<ul class="thumbnails portfolio">
						<li class="span3"><div class="thumbnail roundlrg shadowright"><img class="img-polaroid roundlrg" data-src="holder.js/180x180" alt=""><h4>Title</h4><p>Short description </p><p class="badge">example.com</p></div></li>
						<li class="span3"><div class="thumbnail roundlrg shadowright"><img class="img-polaroid roundlrg" data-src="holder.js/180x180" alt=""><h4>Title</h4><p>Short description </p><p class="badge">example.com</p></div></li>
						<li class="span3"><div class="thumbnail roundlrg shadowright"><img class="img-polaroid roundlrg" data-src="holder.js/180x180" alt=""><h4>Title</h4><p>Short description </p><p class="badge">example.com</p></div></li>
						<li class="span3"><div class="thumbnail roundlrg shadowright"><img class="img-polaroid roundlrg" data-src="holder.js/180x180" alt=""><h4>Title</h4><p>Short description </p><p class="badge">example.com</p></div></li>
						<li class="span3"><div class="thumbnail roundlrg shadowright"><img class="img-polaroid roundlrg" data-src="holder.js/180x180" alt=""><h4>Title</h4><p>Short description </p><p class="badge">example.com</p></div></li>
						<li class="span3"><div class="thumbnail roundlrg shadowright"><img class="img-polaroid roundlrg" data-src="holder.js/180x180" alt=""><h4>Title</h4><p>Short description </p><p class="badge">example.com</p></div></li>
						<li class="span3"><div class="thumbnail roundlrg shadowright"><img class="img-polaroid roundlrg" data-src="holder.js/180x180" alt=""><h4>Title</h4><p>Short description </p><p class="badge">example.com</p></div></li>
						<li class="span3"><div class="thumbnail roundlrg shadowright"><img class="img-polaroid roundlrg" data-src="holder.js/180x180" alt=""><h4>Title</h4><p>Short description </p><p class="badge">example.com</p></div></li>
						<li class="span3"><div class="thumbnail roundlrg shadowright"><img class="img-polaroid roundlrg" data-src="holder.js/180x180" alt=""><h4>Title</h4><p>Short description </p><p class="badge">example.com</p></div></li>
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

</body>
</html>