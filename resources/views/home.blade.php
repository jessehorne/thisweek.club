@extends('layout')

@section('content')
	<div class="tw-container">

		<div class="tw-header"><img src="/mail.png"><p>thisweek.club</p></div>

		<div class="tw-subheader">A hand curated batch of articles for web developers, sent once a week.</div>

		<div class="tw-nav">
			<a href="/" class="tw-nav-item">Home</a>
			<a href="https://www.paypal.me/jesseleehorne" class="tw-nav-item">Donate</a>
			<a href="https://github.com/jessehorne/thisweek.club" class="tw-nav-item">Source</a>
		</div>

		<div class="tw-section">
			thisweek.club is a <i>simple</i> service for <b>Web Developers</b>. We hand-pick a batch of articles from various sources and email them to you, once a week.
		</div>

		<div class="tw-section tw-center">
			How much does this cost? It's <b>free</b>. We rely on donations.
		</div>

		<div class="tw-section">
			<!-- Begin Mailchimp Signup Form -->
				<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
				<style type="text/css">
					#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
					/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
					   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
				</style>
				<div id="mc_embed_signup">
				<form action="https://github.us8.list-manage.com/subscribe/post?u=4fc9b6556afcf6ca527c3b4fe&amp;id=01d30a02ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<div id="mc_embed_signup_scroll">

						<input type="email" value="" name="EMAIL" class="tw-email" id="mce-EMAIL" placeholder="email address" required>
				    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4fc9b6556afcf6ca527c3b4fe_01d30a02ef" tabindex="-1" value=""></div>
				    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="tw-button"></div>
				    </div>
				</form>
				</div>

				<!--End mc_embed_signup-->
		</div>

		<div class="tw-section"><div class="sharethis-inline-share-buttons"></div></div>

		<div class="tw-footer">Copyright © 2018 Jesse Horne | <a href="/privacy">Privacy Policy</a></div>
	</div>
@endsection
