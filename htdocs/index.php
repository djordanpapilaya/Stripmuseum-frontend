<?php

class HttpHelper
{
	public static function isHttps()
	{
		if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
			return true;
		}
		if (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
			return true;
		}
		if (!empty($_SERVER['PORT']) && $_SERVER['PORT'] == 443) {
			return true;
		}

		if ((!empty($_SERVER['HTTP_CLOUDFRONT_FORWARDED_PROTO']) && $_SERVER['HTTP_CLOUDFRONT_FORWARDED_PROTO'] === 'https')) {
			return true;
		}

		return false;
	}

	public static function getProtocol()
	{
		return self::isHttps() ? 'https:' : 'http:';
	}

	public static function getBasePath()
	{
		return self::getProtocol() . '//' . $_SERVER['HTTP_HOST'] . substr($_SERVER['SCRIPT_NAME'], 0, strrpos($_SERVER['SCRIPT_NAME'], '/')) . '/';
	}
}

$basepath = HttpHelper::getBasePath();
?>

<!doctype html>
<!--[if IE 8]>
<html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>
<html class="no-js lt-ie10"><![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"/>

	<title>Stripmuseum Rotterdam</title>

	<!-- this is used for history, absolute uri to your 'index' -->
	<meta name="document-base" content="<?php echo $basepath ?>"/>

	<!-- change this path to cdn or append version folder -->
	<base href="<?php echo $basepath ?>version/src/"/>
	<!-- [deploytool] -->

	<link href="inc/style/screen.css" rel="stylesheet" type="text/css"/>

	<script src="inc/script/vendor/modernizr/modernizr.js"></script>
</head>
<body data-gaia-container="main">

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
			        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><img src="data/img/logo.png" alt="Stichting strips"></a>
		</div>

		<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Bezoek <span class="sr-only">(current)</span></a></li>
				<li><a href="#">Het museum</a></li>
				<li><a href="#">Nieuws</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="page--home">
	<div class="bg"></div>
	<div class="row container-fluid parallex-overflow one-half-margin-bottom">
		<div class="col-md-10 col-md-offset-1" id="intro-text">
			<div class="col-md-10 col-md-offset-1 text-center">
				<h2 class="heading-02 single-margin-bottom">STRIP MUSEUM ROTTERDAM!</h2>

				<p class="copy-01 light large-line-height single-margin-bottom">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
					et
					dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
					aliquip
					ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
					dolore eu
					fugiat nulla pariatu desroste lor de mir.
					onsectetur adipiscing elit, sed do eiusmod tempor.
				</p>
				<a class="quote-button single-margin-bottom" role="button">LEES VERDER</a>
			</div>
		</div>
	</div>

	<section class="double-margin-bottom" id="exhibitions-preview">
		<h2 class="heading-02 dark text-center text-uppercase single-margin-bottom">Tentoonstellingen</h2>

		<p class="copy-01 text-center double-margin-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
			do eiusmod tempor
			incididunt.</p>

		<div class="row container-fluid">
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				</div>
				<div class="caption text-center">
					<h3 class="heading-03 text-uppercase">Expositie naam</h3>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				</div>
				<div class="caption text-center">
					<h3 class="heading-03 text-uppercase">Nog een expo</h3>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				</div>
				<div class="caption text-center">
					<h3 class="heading-03 text-uppercase">kinderprogramma</h3>
				</div>
			</div>
		</div>
	</section>

	<section id="quote" class="pad-section">
		<div class="col-md-6 col-md-offset-3">
			<p class="heading-04">EEN COMPLEET NIEUW STRIPMUSEUM in rotterdam</p>
		</div>
	</section>

	<section id="news-preview">
		<h2 class="heading-02 dark text-center text-uppercase single-margin-bottom">NIEUWS</h2>

		<p class="copy-01 text-center double-margin-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
			do eiusmod tempor incididunt.</p>

		<div class="row container-fluid">
			<div class="col-sm-6 col-md-4 news-item">

				<div class="caption">
					<h3 class="heading-05 text-uppercase">De appel rolt niet ver van de boom</h3>
				</div>
				<p class="copy-01 large-line-height">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
					eiusmod tempor
					incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
					ullamco la.
				</p>

				<div class="thumbnail small">
				</div>
			</div>
			<div class="col-sm-6 col-md-4 news-item">

				<div class="caption">
					<h3 class="heading-05 text-uppercase">EEN OF ANDERE LANGE TITEL</h3>
				</div>
				<p class="copy-01 large-line-height">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
					eiusmod tempor
					incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
					ullamco la.
				</p>

				<div class="thumbnail small">
				</div>

			</div>
			<div class="col-sm-6 col-md-4 news-item">

				<div class="caption">
					<h3 class="heading-05 text-uppercase">Een titel voor de dag van morgen</h3>
				</div>
				<p class="copy-01 large-line-height">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
					eiusmod tempor
					incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
					ullamco la.
				</p>

				<p></p>

				<div class="thumbnail small">
				</div>
			</div>
		</div>
	</section>
</div>

<footer class="default-footer">
	<div class="row">
		<div class="col-md-2">
			<img src="data/img/logo.png" alt="Stichting strips" class="footer-logo">
		</div>

		<div class="col-md-4 col-md-offset-1">
			<div class="footer-adres">
				<span class="copy-02 bold">Bezoek adres</span>
			<span class="copy-02 single-margin-bottom">
				Wijnburgerstraat 1
				<br>
				3011 XW Rotterdam
			</span>

				<span class="copy-02 bold correspondentie">Correspondentie Adres</span>
			<span class="copy-02">
				Noordhoevelaan 37
				<br>
				3319 CH Dordrecht
			</span>
			</div>
			<div class=footer-contact">
				<span class="copy-02">06 286 905 38</span>
				<span class="copy-02">info@stichtingstrips.nl</span>
			</div>
		</div>

		<div class="col-md-3 col-md-offset-2 pull-right">
			<button class="pull-right">jjfsgjlsdfg</button>

			<div class="social-media">
				<a href="facebook-icon" class="">f</a>
				<a href="twitter-icon"></a>
			</div>
		</div>
	</div>
</footer>

<!-- build:js inc/script/app/bundle.js -->
<script src="inc/script/vendor/require/require.js"></script>
<script src="inc/script/vendor/jquery/jquery.js"></script>
<script src="inc/script/app/Bootstrap.js"></script>
<!-- endbuild -->

</body>
</html>