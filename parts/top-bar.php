<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>

<?
global $wpdb;
$results = $wpdb->get_results("select ID, name FROM radio_station_list");
?>
<div class="top-bar-container contain-to-grid sticky show-for-medium-up">
    <nav class="top-bar" data-topbar role="navigation">
        <div class="small-2 columns">
        	<ul class="title-area">
            	<li class="name">
            	    <a href="http://top-radio.org"><img src="http://top-radio.org/wp-content/uploads/2015/05/TR01.png" alt="TopRadio"></a>
          	 	</li>
        	</ul>
        </div>
		<section class="top-bar-section">
			<div class="small-8 columns">
				<ul class="left">
					<li class="has-dropdown"><a>Country</a>
						<ul class="dropdown">
							<li><a href="/malaysia/">Malaysia</a></li>
							<li><a href="/thailand/">Thailand</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a>Station List</a>
						<ul class="dropdown">
							<li><a href="/country/">By Country</a></li>
							<li><a href="/station/">By Station</a></li>
						</ul>
					</li>
					<li class="navbar-search">
						<form action="/search/" onsubmit="location.href='http://top-radio.org/search/?q=' + document.getElementById('search-text').value; return false;">
						<input id="search-text" type="text" name="q" autocomplete="off" class="form-control input-sm ng-pristine ng-valid" placeholder="Search">
						<div class="searchButton" onclick="location.href='/search/?q=' + document.getElementById('search-text').value;"><i class="fa fa-search"></i></div>
						</form>
					</li>
				</ul>
			</div>
			<div class="small-2 columns">
				<a href="https://www.facebook.com/OnlineTopRadio"><img title="Facebook" alt="Facebook" src="http://top-radio.org/wp-content/uploads/2015/05/fb-break.png" width="35" height="35" /></a>
				<a href="https://twitter.com/OnlineTopRadio"><img title="Twitter" alt="Twitter" src="http://top-radio.org/wp-content/uploads/2015/05/tw-break.png" width="35" height="35" /></a>
			</div>
		</section>
    </nav>
</div>