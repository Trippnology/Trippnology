<!doctype html>
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?=$SEOtitle?></title>
	<meta name="description" content="<?=$strDescription?>">
	<meta name="keywords" content="<?=$strKeywords?>">
	<meta name="robots" content="index,follow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css"><!-- Placed last to override all other styles -->
	<link rel="canonical" href="<?=$siteDomain?><?=$strCanonical?>">
	<link rel="author" href="<?=$siteDomain?>humans.txt">

	<?php if ($socialTwitterName): ?>
		<link rel="me" href="http://twitter.com/<?=$socialTwitterName?>">
	<?php endif; ?>

<script src="js/libs/modernizr.min.js"></script>
</head>
