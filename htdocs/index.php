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



<!-- build:js inc/script/app/bundle.js -->
<script src="inc/script/vendor/require/require.js"></script>
<script src="inc/script/app/Bootstrap.js"></script>
<!-- endbuild -->

</body>
</html>