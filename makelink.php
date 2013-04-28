<?php
include "inc/settings.php";

$strPageName = "Make a link";
$strCanonical = "makelink";
$strDescription = "Sometimes you have a URL but need to make a link to help you save it. This a is a quick and dirty way to do that.";
$strKeywords = "make a link, url";
$SEOtitle = $strPageName . " | " . $siteName;
$pageSlug = "makelink";
$pageHeaderImageURL = "img/ui/headers/trippnology-default.jpg";
$pageHeaderImageURLSource = "https://secure.flickr.com/photos/manchester-monkey/4150657215/";
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
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="span9" id="main" role="main">
				<article class="span6">
					<p class="lead">Sometimes you have a URL but need to make a link to help you save the destination file. This a is a quick and dirty way to do that.</p>
					<p>In most cases you can simply click the button to download. None of that 'right click, save as' malarky any more, thanks to the HTML5 download attribute</p>
					<form id="linkform">
						<div class="input-append">
							<input id="urlinput" type="url">
							<button type="submit" class="btn">Make link</button>
						</div>
					</form>
					<p id="linkholder"></p>
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

<script>
	$('#linkform').submit(function(){
		var url = $('#urlinput').val(),
			linkbutton = $('<a>',{
				id: 'yourlink',
				class: 'btn btn-success',
				rel: 'external',
				download: '',
				text: url,
				href: url
			});
		$('#linkholder').html(linkbutton);
		return false;
	});
</script>

</body>
</html>
