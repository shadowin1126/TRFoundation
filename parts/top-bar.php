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
    <nav class="top-bar" data-topbar role="navigation">
        <div class="small-2 columns">
        	<ul class="title-area">
            	<li class="name">
            	    <a href="http://top-radio.org"><img src="/wp-content/uploads/2015/05/TR01.png" alt="TopRadio"></a>
          	 	</li>
        	</ul>
        </div>
		<section class="top-bar-section">
			<div class="small-5 columns">
				<ul class="left">
					<li><a href="/country/">Country</a></li>
					<li><a href="/genre/">Genre</a></li>
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

<!-- breadcrumbs -->
<?php
$data = getLastPathSegment($_SERVER['REQUEST_URI']);
$crumbString1 = "/".$data[0]."/";
if (isset($data[1])) {
	$crumbString2 = "/".$data[0]."/".$data[1]."/";
}
if ($data[0]) {
	echo '<div class="row">';
		echo '<div class="small-12 columns">';
				echo '<ul class="breadcrumbs">';
				if (isset($data[1])) {
					echo '<li><a href="/">Home</a></li>';
					echo "<li><a href=$crumbString1>$data[0]</a></li>";
					echo "<li class='current'><a href=$crumbString2>$data[1]</a></li>";
				}
				else {
					echo '<li><a href="/">Home</a></li>';
					echo "<li class='current'><a href=$crumbString1>$data[0]</a></li>";
				}
				echo '</ul>';
		echo '</div>';
	echo '</div>';
}
?>