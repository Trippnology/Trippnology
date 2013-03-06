<?php 
include "inc/settings.php";

$strPageName = "Blank Page";
$strCanonical = "template-blank.php";
$strDescription = "Bare minimum of components.";
$strKeywords = "keyword1, keyword2, keyword3";
$SEOtitle = $strPageName . " | " . $siteName;
$pageSlug = "blank";
$strTweetText = $strPageName;

include "head.php";
?>

<body class="page-<?=$pageSlug?>">
	<?php include "inc/navbar.php"; ?>

	<div class="container">	
		<div class="row">
			<div class="span8 offset1" id="main" role="main">
				<article>
					<h1 id="pagetitle"><a href="<?= $strCanonical ?>" title="<?= $strPageName ?>"><?= $strPageName ?></a></h1>
					<p>Your content here.</p>
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