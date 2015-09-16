<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>

<style type='text/css'>
.navbar-search input {
  background: #2E70A9;
  margin-top: 1px;
  color: #475058;
  border-color: #002342;
  padding-right: 30px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.navbar-search .searchButton {
  background: #2E70A9;
  position: absolute;
  right: 16px;
  top: 2px;
  height: 26px;
  line-height: 1.5;
  margin-top: 9px;
  padding: 2px 10px;
  color: #FFFFFF;
  cursor: pointer;
  border-left: 1px solid rgba(255,255,255,0.1);
  -webkit-box-shadow: -1px 0 0 #002342;
  box-shadow: -1px 0 0 #002342;
  text-shadow: 0px 2px 0px #002342;
}
</style>

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
			<div class="small-5 columns">
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
							<li><a href="/genre/">By Genre</a></li>
							<li><a href="/station/">By Station</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="small-2 columns">
				<a href="https://www.facebook.com/OnlineTopRadio"><img title="Facebook" alt="Facebook" src="http://top-radio.org/wp-content/uploads/2015/05/fb-break.png" width="35" height="35" /></a>
				<a href="https://twitter.com/OnlineTopRadio"><img title="Twitter" alt="Twitter" src="http://top-radio.org/wp-content/uploads/2015/05/tw-break.png" width="35" height="35" /></a>
			</div>
			<div class="small-3 columns navbar-search">
				<form action="/search/" onsubmit="location.href='http://top-radio.org/search/?q=' + document.getElementById('search-text').value; return false;">
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
$crumbString1 = "http://top-radio.org/".$data[0]."/";
if (isset($data[1])) {
	$crumbString2 = "http://top-radio.org/".$data[0]."/".$data[1]."/";
}
if ($data[0]) {
	echo '<div class="row">';
		echo '<div class="medium-12 columns">';
				echo '<ul class="breadcrumbs">';
				if (isset($data[1])) {
					echo '<li><a href="http://top-radio.org">Home</a></li>';
					echo "<li><a href=$crumbString1>$data[0]</a></li>";
					echo "<li class='current'><a href=$crumbString2>$data[1]</a></li>";
				}
				else {
					echo '<li><a href="http://top-radio.org">Home</a></li>';
					echo "<li class='current'><a href=$crumbString1>$data[0]</a></li>";
				}
				echo '</ul>';
		echo '</div>';
	echo '</div>';
}
?>