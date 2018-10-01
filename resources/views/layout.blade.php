<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>thisweek.club | A Hand-Curated Newsletter for Web Developers</title>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-57844655-8"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-57844655-8');
		</script>


		<link rel="stylesheet" href="/css/style.css">
		<link href="https://fonts.googleapis.com/css?family=PT+Mono" rel="stylesheet">

		<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5baf45627283210011cb5c2b&product=inline-share-buttons"></script>
	</head>
	<body>
		<div class="tw-issue"><b>#{{ env("TW_ISSUE") }}</b> arriving <b>{{ env("TW_NEXT") }}</b></div>

		<div class="tw-container">
			<div class="tw-header"><img src="/mail.png"><p>thisweek.club</p></div>

			<div class="tw-subheader">A hand curated batch of articles for web developers, sent once a week.</div>

			<div class="tw-nav">
				<a href="/" class="tw-nav-item">Home</a>
				<a href="/donors" class="tw-nav-item">Donors</a>
				<a href="https://github.com/jessehorne/thisweek.club" class="tw-nav-item">Source</a>
			</div>

			@yield("content")

			<div class="tw-footer">Copyright © 2018 Jesse Horne | <a href="/privacy">Privacy Policy</a></div>
		</div>
	</body>
</html>
