<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

global $wpdb;
$results = $wpdb->get_results("select ID, name FROM radio_station_list");
?>

<div class="top-bar-container contain-to-grid sticky show-for-medium-up">
	<nav class="top-bar" data-topbar>
		<div class="small-2 columns">
    		<ul class="title-area">
				<li class="name">
					<a href="https://top-radio.org"><img src="/wp-content/uploads/2015/05/TR01.png" alt="TopRadio"></a>
				</li>
			</ul>
		</div>
		<section class="top-bar-section">
			<div class="small-5 columns">
				<ul class="left">
					<li><a href="/country/">Country</a></li>
					<li><a href="/genre/">Genre</a></li>
					<li><a href="/submit-station/">Submit Station</a></li>
				</ul>
			</div>
			<div class="small-2 columns">
				<a href="https://www.facebook.com/OnlineTopRadio"><img title="Facebook" alt="Facebook" src="/wp-content/uploads/2015/05/fb-break.png" width="35" height="35" /></a>
				<a href="https://twitter.com/OnlineTopRadio"><img title="Twitter" alt="Twitter" src="/wp-content/uploads/2015/05/tw-break.png" width="35" height="35" /></a>
			</div>
			<div class="small-3 columns navbar-search">
				<form action="/search/" onsubmit="location.href='/search/?q=' + document.getElementById('search-text').value; return false;">
				<input id="search-text" type="text" name="q" autocomplete="off" class="form-control input-sm ng-pristine ng-valid" placeholder="Search">
				<div class="searchButton" onclick="location.href='/search/?q=' + document.getElementById('search-text').value;"><i class="fa fa-search"></i></div>
				</form>
			</div>
		</section>
	</nav>
</div>