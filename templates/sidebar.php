<?php
/*
Template Name: Sidebar
*/
get_header(); ?>
<div class="row">


<style type='text/css'>
.mainButton {
  background: #f7fafc;
  background-image: -webkit-linear-gradient(top, #f7fafc, #89ccf5);
  background-image: -moz-linear-gradient(top, #f7fafc, #89ccf5);
  background-image: -ms-linear-gradient(top, #f7fafc, #89ccf5);
  background-image: -o-linear-gradient(top, #f7fafc, #89ccf5);
  background-image: linear-gradient(to bottom, #f7fafc, #89ccf5);
  -webkit-border-radius: 5;
  -moz-border-radius: 5;
  border-radius: 5px;
  font-family: Arial;
  color: #ffffff;
  font-size: 18px;
  margin-bottom: 10px;
  padding: 10px 20px 10px 20px;
  display: inline-block;
  text-decoration: none;
}

.mainButton:hover {
  background: #c3e5fa;
  background-image: -webkit-linear-gradient(top, #c3e5fa, #60befc);
  background-image: -moz-linear-gradient(top, #c3e5fa, #60befc);
  background-image: -ms-linear-gradient(top, #c3e5fa, #60befc);
  background-image: -o-linear-gradient(top, #c3e5fa, #60befc);
  background-image: linear-gradient(to bottom, #c3e5fa, #60befc);
  text-decoration: none;
}
 .mainpage-search input {
  background: #FFFFFF;
  margin-top: 0px;
  color: #475058;
  border-color: #002342;
  padding-right: 30px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.mainpage-search .searchButton {
  background: #FFFFFF;
  position: absolute;
  right: 25px;
  top: 2px;
  height: 30px;
  line-height: 1.5;
  margin-top: 77px;
  padding: 5px 10px;
  color: #000000;
  cursor: pointer;
  border-left: 1px solid rgba(255,255,255,0.1);
  -webkit-box-shadow: -1px 0 0 #002342;
  box-shadow: -1px 0 0 #002342;
  text-shadow: 0px 2px 0px #002342;
}
</style>

	<div class="large-8 medium-8 small-12 columns">
		<div class="row">
			<br />
			<div class="panel callout radius mainpage-search">
				<h4>Search the world of radio</h4>
				<form action="/search/" onsubmit="location.href='http://top-radio.org/search/?q=' + document.getElementById('mainsearch-text').value; return false;">
				<input id="mainsearch-text" type="text" name="q" autocomplete="off" class="form-control input-sm ng-pristine ng-valid" placeholder="Search">
				<div class="searchButton" onclick="location.href='/search/?q=' + document.getElementById('mainsearch-text').value;"><i class="fa fa-search"></i></div>
				</form>
				<br /><br />
				<a>Search from tens of thousands of radio stations from all over the world playing only the best music from every genre.</a>
			</div>
		</div>
	
		<div class="row">
			<h4>Popular Genres</h4>
			<div class="panel callout radius text-center">
				<a style="margin: 4px;" href="/genre/top-40/" class="mainButton">Top 40</a>
				<a style="margin: 4px;" href="/genre/70s/" class="mainButton">70s</a>
				<a style="margin: 4px;" href="/genre/pop/" class="mainButton">Pop</a>
				<a style="margin: 4px;" href="/genre/rnb/" class="mainButton">R&B</a>
				<a style="margin: 4px;" href="/genre/80s/" class="mainButton">80s</a>
				<a style="margin: 4px;" href="/genre/easy-listening/" class="mainButton">Easy Listening</a>
				<a style="margin: 4px;" href="/genre/country/" class="mainButton">Country</a>
				<a style="margin: 4px;" href="/genre/60s/" class="mainButton">60s</a>
				<a style="margin: 4px;" href="/genre/jazz/" class="mainButton">Jazz</a>
				<a style="margin: 4px;" href="/genre/chillout/" class="mainButton">Chillout</a>
				<a style="margin: 4px;" href="/genre/rock/" class="mainButton">Rock</a>
				<a style="margin: 4px;" href="/genre/classical/" class="mainButton">Classical</a>
				<a style="margin: 4px;" href="/genre/blues/" class="mainButton">Blues</a>
				<a style="margin: 4px;" href="/genre/ambient/" class="mainButton">Ambient</a>
				<a style="margin: 4px;" href="/genre/metal/" class="mainButton">Metal</a>
				<a style="margin: 4px;" href="/genre/bollywood/" class="mainButton">Bollywood</a>
				<a style="margin: 4px;" href="/genre/oldies/" class="mainButton">Oldies</a>
				<a style="margin: 4px;" href="/genre/techno/" class="mainButton">Techno</a>
				<a style="margin: 4px;" href="/genre/90s/" class="mainButton">90s</a>
				<a style="margin: 4px;" href="/genre/dance/" class="mainButton">Dance</a>
				<a style="margin: 4px;" href="/genre/alternative/" class="mainButton">Alternative</a>
				<a style="margin: 4px;" href="/genre/soul/" class="mainButton">Soul</a>
				<a style="margin: 4px;" href="/genre/funk/" class="mainButton">Funk</a>
				<a style="margin: 4px;" href="/genre/sports/" class="mainButton">Sports</a>
				<a style="margin: 4px;" href="/genre/hip-hop/" class="mainButton">Hip Hop</a>
				<a style="margin: 4px;" href="/genre/reggae/" class="mainButton">Reggae</a>
				<a style="margin: 4px;" href="/genre/news/" class="mainButton">News</a>
				<a style="margin: 4px;" href="/genre/indie/" class="mainButton">Indie</a>
				<a style="margin: 4px;" href="/genre/disco/" class="mainButton">Disco</a>
			</div>
			<?
			/**
			<h4>Featured Stations</h4>
			<marquee direction="right" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="1" scrolldelay="45" truespeed="" height="120" style="height: 110px;">
				<p>
				<a href="/malaysia/melody-fm/"><img src="http://top-radio.org/wp-content/uploads/logo/melody-fm.jpg" alt="melody-fm" width="170" height="50"></a>
				<a href="/thailand/fmone/"><img src="http://top-radio.org/wp-content/uploads/logo/fmone.jpg" alt="mix-fm" width="170" height="50"></a>
				<a href="/malaysia/mix-fm/"><img src="http://top-radio.org/wp-content/uploads/logo/mix-fm.jpg" alt="mix-fm" width="170" height="50"></a>
				<a href="/thailand/chill89-fm/"><img src="http://top-radio.org/wp-content/uploads/logo/chill89-fm.jpg" alt="chill89-fm" width="170" height="50"></a>
				<a href="/malaysia/my-fm/"><img src="http://top-radio.org/wp-content/uploads/logo/my-fm.jpg" alt="mix-fm" width="170" height="50"></a>
				<a href="/thailand/coolism/"><img src="http://top-radio.org/wp-content/uploads/logo/coolism.jpg" alt="mix-fm" width="170" height="50"></a>
				<a href="/malaysia/bfm/"><img src="http://top-radio.org/wp-content/uploads/logo/bfm.jpg" alt="bfm" width="170" height="50"></a>
				<a href="/thailand/baka-radio/"><img src="http://top-radio.org/wp-content/uploads/logo/baka-radio.jpg" alt="baka-radio" width="170" height="50"></a>
				</p>
			</marquee>
			**/
			?>
		</div>
		<div class="row">
			<h4>Top 10 Stations</h4>
			<div class="panel callout radius text-center">
				<a style="margin: 4px;" href='/united-states/1027-kiis-fm-kvvs/'><img src='/wp-content/uploads/logo/8aSua9MVFh.jpg' alt='1027-kiis-fm-kvvs' height="60" width="110"></a>
				<a style="margin: 4px;" href='/united-kingdom/heart-london-1062/'><img src='/wp-content/uploads/logo/rFGM25552n.jpg' alt='heart-london-1062' height="60" width="110"></a>
				<a style="margin: 4px;" href='/united-kingdom/bbc-world-service/'><img src='/wp-content/uploads/logo/Lz9bbsba4b.jpg' alt='bbc-world-service' height="60" width="110"></a>
				<a style="margin: 4px;" href='/china/voa-voice-of-america/'><img src='/wp-content/uploads/logo/nDEh77F56e.jpg' alt='voa-voice-of-america' height="60" width="110"></a>
				<a style="margin: 4px;" href='/united-states/jazz24/'><img src='/wp-content/uploads/logo/qtPqwNwvkK.jpg' alt='jazz24' height="60" width="110"></a>
				<a style="margin: 4px;" href='/greece/kiss-911-fm/'><img src='/wp-content/uploads/logo/gpcPrLtyX3.jpg' alt='kiss-911-fm' height="60" width="110"></a>
				<a style="margin: 4px;" href='/australia/gold-fm/'><img src='/wp-content/uploads/logo/XAryWL2prn.jpg' alt='gold-fm' height="60" width="110"></a>
				<a style="margin: 4px;" href='/argentina/radio-mitre/'><img src='/wp-content/uploads/logo/RrNKZyK6Ws.jpg' alt='radio-mitre' height="60" width="110"></a>
				<a style="margin: 4px;" href='/czech-republic/evropa2/'><img src='/wp-content/uploads/logo/4eYJ2UArA8.jpg' alt='evropa2' height="60" width="110"></a>
				<a style="margin: 4px;" href='/netherlands/q-music/'><img src='/wp-content/uploads/logo/zUnUVPKKmc.jpg' alt='q-music' height="60" width="110"></a>
			</div>
		</div>
	</div>
	
	<div id="page">
	<?php
	/**
		<div class="medium-4 small-12 columns">
			<h4><a href="https://www.facebook.com/OnlineTopRadio">Top Radio Facebook</a></h4>
			<br />
			<div class="fbfeed">
				<?php
					echo do_shortcode('[custom-facebook-feed id=1432179603751975 num=3 textsize=13]');
				//	echo do_shortcode('[fbf_page_feed pageID="1432179603751975" num="3" show_description="true" update="true" show_avatar="true" avatar_size="square" link_target_blank="true" feed_title="true" like_button="true" like_button_position="top"]');
				?>
				<br />
			</div>
		</div>
	**/
	?>
		<footer>
			<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
			<p><?php the_tags(); ?></p>
		</footer>
		<?php comments_template(); ?>


	</div>
	<div class="large-4 medium-4 small-12 columns" id="right-widget-area">

		   <?php dynamic_sidebar( 'Custom Front Page Sidebar' ); ?>

	</div>
</div>

<?php get_footer(); ?>