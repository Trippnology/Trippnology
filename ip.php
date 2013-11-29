<?php
include "inc/settings.php";

$strPageName = "IP Address info";
$strCanonical = "ip";
$strDescription = "Find out your current real world IP address and more network info.";
$strKeywords = "ip address, network info";
$SEOtitle = $strPageName . " | " . $siteName;
$pageSlug = "ip";
$pageHeaderImageURL = "img/ui/headers/trippnology-default.jpg";
$pageHeaderImageURLSource = "https://secure.flickr.com/photos/manchester-monkey/4150657215/";
$strTweetText = $strPageName;
$host = $_SERVER['REMOTE_HOST'];
$format = $_GET['format'];

/* If the "format" query parameter is used, simply return the IP
   and forget about rendering the rest of the page */
if ($format == "text") {
	echo $userIP;
	die;
}
if ($format == "json") {
	header('Content-Type: application/json; charset=utf8');
	echo json_encode(array('ip' => $userIP));
	die;
}
if ($format == "jsonp") {
	header('Content-Type: text/javascript; charset=utf8');
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Max-Age: 3628800');
	header('Access-Control-Allow-Methods: GET');
	$callback = $_GET['callback'];
	echo $callback . '(' . json_encode(array('ip' => $userIP)) . ');';
	die;
}

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
				<article>
					<h1>Your IP address is currently:</h1>
					<p class="lead"><?=$userIP?><br>
						<span class="ipv6-status">IPv6 status: <a href="http://ipv6.trippnology.com/"><img src="http://ipv6.trippnology.com/img/ipv6-80x15.png" alt="IPv6 ready"></a></span></p>

					<ul>
					  <li><a rel="external" href="http://network-tools.com/default.asp?prog=express&amp;host=<?=$userIP?>">Network Tools Report</a>
					  <li><a rel="external" href="http://www.robtex.com/ip/<?=$userIP?>.html">Robtex</a>
					  <li><a rel="external" href="http://www.ip-adress.com/reverse_ip/<?=$userIP?>">Reverse Lookup</a>
					  <li><a rel="external" href="http://just-ping.com/index.php?vh=<?=$userIP?>&amp;c=&amp;s=ping!">JustPing</a>
					</ul>
				</article>

				<?php if(!empty($host)){ ?>
				<article>
					<h1>Host</h1>
						<h2>Your hostname is currently:</h2>
						<p class="lead"><?=$host?> (often just your IP)</p>
					<ul>
						<li><a rel="external" href="http://whois.domaintools.com/<?=$host?>">Whois</a>
						<li><a rel="external" href="http://www.whatsmydns.net/#A/<?=$host?>">Name Servers</a>
						<li><a rel="external" href="http://www.whatsmydns.net/#MX/<?=$host?>">Mail Servers</a>
					</ul>
				</article>
				<?php }; ?>

				<article>
					<h1>Help</h1>
					<p>There are currently 4 ways to use this page. You can simply visit this page in your browser and read the result (this is what you're doing right now).</p>
					<p>Alternatively, you can add a <code>format</code> query parameter to get your IP in various formats, like so:</p>
					<ol>
						<li>Text: <code>http://trippnology.com/ip?format=text</code></li>
						<li>JSON: <code>http://trippnology.com/ip?format=json</code></li>
						<li>JSONP: <code>http://trippnology.com/ip?format=jsonp&callback=yourcallback</code></li>
					</ol>
				</article>

				<article>
					<h1>Other Tools:</h1>
					<ul>
						<li><a rel="external" href="https://check.torproject.org/">Check TOR status</a>
						<li><a rel="external" href="http://www.opendns.com/support/cache/">OpenDNS Cache Check</a>
						<li><a rel="external" href="http://www.downforeveryoneorjustme.com/">Down for everyone or just me?</a>
						<li><a rel="external" href="http://network-tools.com/">Network Tools</a>
					</ul>
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
		$(function() {
			$('.ipv6-status img').error(function() {
				$('.ipv6-status').text('It looks like you are unable to access the IPv6 internet.');
			});
		});
	</script>
</body>
</html>
