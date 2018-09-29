<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>thisweek.club | A Hand-Curated Newsletter for Web Developers</title>

		<link rel="stylesheet" href="/css/style.css">
		<link href="https://fonts.googleapis.com/css?family=PT+Mono" rel="stylesheet">

		<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5baf45627283210011cb5c2b&product=inline-share-buttons"></script>
	</head>
	<body>
		<div class="tw-issue"><b>#{{ env("TW_ISSUE") }}</b> arriving <b>{{ env("TW_NEXT") }}</b></div>

		@yield("content")
	</body>
</html>
