<?php
include "inc/settings.php";

$strPageName = "Search Engine Optimisation";
$strCanonical = "search-engine-optimisation-attleborough";
$strDescription = "Professional SEO service for Attleborough, Wymondham, Norwich, Thetford and beyond.";
$strKeywords = "Search Engine Optimisation, seo, Attleborough, Wymondham, Norwich, Thetford";
$SEOtitle = $strPageName . " | " . $siteName;
$pageSlug = "seo";
$pageHeaderImageURL = "img/ui/headers/seo-attleborough.jpg";
$pageHeaderImageURLSource = "https://secure.flickr.com/photos/manchester-monkey/4150657215/";
$strTweetText = $strPageName;

include "head.php";
?>

<body class="page-<?=$pageSlug?>">
	<?php include "inc/navbar.php"; ?>

	<header class="page-header roundlrg">
		<img src="<?=$pageHeaderImageURL?>" alt="SEO Attleborough header" class="roundlrg" data-sourceurl="<?=$pageHeaderImageURLSource?>">
		<div class="container">
			<div class="header-caption roundlrg">
				<h1 id="pagetitle"><a href="<?= $strCanonical ?>" title="<?= $strPageName ?>"><?= $strPageName ?></a></h1>
				<h2>Turn searchers into visitors and visitors into customers.</h2>
				<p>We provide search engine optimisation to small business' in Attleborough and the surrounding areas.</p>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="span9" id="main" role="main">
				<article>
					<img src="img/ui/search-icon-512.png" alt="Search engine optimisation Attleborough icon" class="featurette-image">
					<h1>Is your website hard to find?</h1>
					<p>Search engine optimisation, or simply SEO, is the art of getting your pages ranked high in the search engine results. 85% of internet users use Google for their searching so it's vital that your website is on the first page. In fact, you probably found this very article via a Google search. Trippnology can optimise your existing website and suggest new content to bring in those extra customers.</p>
					<p>While Google certainly has the lion's share of the search market, old favorites like Yahoo and Microsoft's Bing are also very important, so we make sure your content will be well indexed by all.</p>
					<p>We provide you with our custom Google Analytics dashboards which show you the metrics that matter, helping you to further tune your pages and proving that hiring us is good for your business.</p>
					<p>All SEO work is charged at our flat web services rate available on our <a href="prices">web services pricing</a> page.</p>
					<p><a href="contact">Contact us</a> about search engine optimisation today and boost your online presence.</p>
				</article>

				<hr class="divider">

				<article>
					<img src="img/screens/limecrete.jpg" alt="Screenshot of the Limecrete Company website" class="pull-right roundsm img-polaroid featurette-image">
					<h1>Case Study</h1>
					<p>Trippnology were approached by ecological construction firm <a href="http://www.limecrete.co.uk/" rel="external">The Limecrete Company</a> who provide <a href="http://www.limecrete.co.uk/limecrete.asp" rel="external">limecrete</a>, <a href="http://www.limecrete.co.uk/hempcrete.asp" rel="external">hempcrete</a> and <a href="http://www.limecrete.co.uk/polished-screed.asp" rel="external">polished screed</a> throughout Europe.</p>
					<p>Louisa and Myles already had a website they had built themselves	using a popular DIY site builder. As with most of these systems, it got	them online but the pages produced were far from search engine friendly	which was hurting their quest for new customers.</p>
					<p>We completely overhauled the site, simplifying the code and optimising all of the content to improve loading speed, boost their search ranking and pull in new business.</p>
					<p>Since the redesign, week after week, visitor numbers have continued to grow. Louisa tells us that the number of enquiries tripled almost immediately, leading to them having to take on extra staff to cope with demand for their services.</p>
					<p>Do you want more customers landing on your website? <a href="contact">Contact us</a> today.</p>
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
