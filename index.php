<html>
<head>
	<title>BeyondStory</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0,minimal-ui" id="viewport"/>
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
	<header id="header">
		<a href="/" id="logo-wrapper"><img class="img-responsive" id="logo" src="/assets/images/logo1.png"></a>
	</header>
	<div id="container" class="container">
		<article>
			<ul id="article-wrapper">
				<?php for($i-0;$i<10;$i++) { ?>
					<li class="col-xs-12 col-sm-6 col-lg-4 col-md-4">
						<div class="article-container">
							<div class="article-details">some big image</div>
							<div class="article-text">text goes here</div>
						</div>
					</li>
				<?php } ?>
			</ul>
		</article>
	</div>
</body>
</html>