<?php
/*
Template Name: List By Genre
*/
get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns">
		<header>
			<h1 class="entry-title">Genres</h1>
		</header>
		<!-- Ads -->
		<div class="row">
			<div class="large-8 small-12 columns">
				<!-- /6880916/Top-Radio-Top-728-300 -->
				<div id='ad-top'>
				<script type='text/javascript'>
				googletag.cmd.push(function() { googletag.display('ad-top'); });
				</script>
				</div>
			</div>
		</div>
		<br />
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
		<div class="row">
			<div class="small-12 columns">
			<br />
			<ul>
			<li><a href='https://top-radio.org/genre/60s/'>60s</a></li>
			<li><a href='https://top-radio.org/genre/70s/'>70s</a></li>
			<li><a href='https://top-radio.org/genre/80s/'>80s</a></li>
			<li><a href='https://top-radio.org/genre/90s/'>90s</a></li>
			<li><a href='https://top-radio.org/genre/adult-contemporary/'>Adult Contemporary</a></li>
			<li><a href='https://top-radio.org/genre/adult-rock/'>Adult Rock</a></li>
			<li><a href='https://top-radio.org/genre/alternative/'>Alternative</a></li>
			<li><a href='https://top-radio.org/genre/ambient/'>Ambient</a></li>
			<li><a href='https://top-radio.org/genre/art/'>Art</a></li>
			</ul>
			<!-- /6880916/Top-Radio-After-728-300 -->
			<div id='ad-after'>
			<script type='text/javascript'>
			googletag.cmd.push(function() { googletag.display('ad-after'); });
			</script>
			</div>
			<br />
			<ul>
			<li><a href='https://top-radio.org/genre/asian/'>Asian</a></li>
			<li><a href='https://top-radio.org/genre/blind-reader-service/'>Blind Reader Service</a></li>
			<li><a href='https://top-radio.org/genre/blues/'>Blues</a></li>
			<li><a href='https://top-radio.org/genre/bollywood/'>Bollywood</a></li>
			<li><a href='https://top-radio.org/genre/caribbean/'>Caribbean</a></li>
			<li><a href='https://top-radio.org/genre/catholic/'>Catholic</a></li>
			<li><a href='https://top-radio.org/genre/chillout/'>Chillout</a></li>
			<li><a href='https://top-radio.org/genre/christian/'>Christian</a></li>
			<li><a href='https://top-radio.org/genre/classic-hits/'>Classic Hits</a></li>
			<li><a href='https://top-radio.org/genre/classic-rock/'>Classic Rock</a></li>
			<li><a href='https://top-radio.org/genre/classical/'>Classical</a></li>
			<li><a href='https://top-radio.org/genre/college/'>College</a></li>
			<li><a href='https://top-radio.org/genre/comedy/'>Comedy</a></li>
			<li><a href='https://top-radio.org/genre/community/'>Community</a></li>
			<li><a href='https://top-radio.org/genre/country/'>Country</a></li>
			<li><a href='https://top-radio.org/genre/culture-history/'>Culture-History</a></li>
			<li><a href='https://top-radio.org/genre/current-affairs/'>Current Affairs</a></li>
			<li><a href='https://top-radio.org/genre/dance/'>Dance</a></li>
			<li><a href='https://top-radio.org/genre/disco/'>Disco</a></li>
			<li><a href='https://top-radio.org/genre/dj/'>DJ</a></li>
			<li><a href='https://top-radio.org/genre/dutch/'>Dutch</a></li>
			<li><a href='https://top-radio.org/genre/easy-listening/'>Easy Listening</a></li>
			<li><a href='https://top-radio.org/genre/eclectic/'>Eclectic</a></li>
			<li><a href='https://top-radio.org/genre/educational/'>Educational</a></li>
			<li><a href='https://top-radio.org/genre/electronic-dance/'>Electronic-Dance</a></li>
			<li><a href='https://top-radio.org/genre/entertainment/'>Entertainment</a></li>
			<li><a href='https://top-radio.org/genre/ethnic/'>Ethnic</a></li>
			<li><a href='https://top-radio.org/genre/euro-hits/'>Euro Hits</a></li>
			<li><a href='https://top-radio.org/genre/fire/'>Fire</a></li>
			<li><a href='https://top-radio.org/genre/folk/'>Folk</a></li>
			<li><a href='https://top-radio.org/genre/french-talk/'>French Talk</a></li>
			<li><a href='https://top-radio.org/genre/funk/'>Funk</a></li>
			<li><a href='https://top-radio.org/genre/gospel/'>Gospel</a></li>
			<li><a href='https://top-radio.org/genre/greek/'>Greek</a></li>
			<li><a href='https://top-radio.org/genre/health/'>Health</a></li>
			<li><a href='https://top-radio.org/genre/hip-hop/'>Hip Hop</a></li>
			<li><a href='https://top-radio.org/genre/hot-ac/'>Hot AC</a></li>
			<li><a href='https://top-radio.org/genre/house/'>House</a></li>
			<li><a href='https://top-radio.org/genre/india/'>India</a></li>
			<li><a href='https://top-radio.org/genre/indie/'>Indie</a></li>
			<li><a href='https://top-radio.org/genre/information/'>Information</a></li>
			<li><a href='https://top-radio.org/genre/international/'>International</a></li>
			<li><a href='https://top-radio.org/genre/irish/'>Irish</a></li>
			<li><a href='https://top-radio.org/genre/islam/'>Islam</a></li>
			<li><a href='https://top-radio.org/genre/japanese/'>Japanese</a></li>
			<li><a href='https://top-radio.org/genre/jazz/'>Jazz</a></li>
			<li><a href='https://top-radio.org/genre/jewish/'>Jewish</a></li>
			<li><a href='https://top-radio.org/genre/latino/'>Latino</a></li>
			<li><a href='https://top-radio.org/genre/local-music/'>Local Music</a></li>
			<li><a href='https://top-radio.org/genre/lounge/'>Lounge</a></li>
			<li><a href='https://top-radio.org/genre/love-songs/'>Love Songs</a></li>
			<li><a href='https://top-radio.org/genre/media/'>Media</a></li>
			<li><a href='https://top-radio.org/genre/metal/'>Metal</a></li>
			<li><a href='https://top-radio.org/genre/modern-rock/'>Modern Rock</a></li>
			<li><a href='https://top-radio.org/genre/news/'>News</a></li>
			<li><a href='https://top-radio.org/genre/oldies/'>Oldies</a></li>
			<li><a href='https://top-radio.org/genre/opera/'>Opera</a></li>
			<li><a href='https://top-radio.org/genre/polish/'>Polish</a></li>
			<li><a href='https://top-radio.org/genre/pop/'>Pop</a></li>
			<li><a href='https://top-radio.org/genre/portuguese/'>Portuguese</a></li>
			<li><a href='https://top-radio.org/genre/public/'>Public</a></li>
			<li><a href='https://top-radio.org/genre/punk/'>Punk</a></li>
			<li><a href='https://top-radio.org/genre/rnb/'>R&amp;B</a></li>
			<li><a href='https://top-radio.org/genre/reggae/'>Reggae</a></li>
			<li><a href='https://top-radio.org/genre/regional/'>Regional</a></li>
			<li><a href='https://top-radio.org/genre/religion-spirituality/'>Religion-Spirituality</a></li>
			<li><a href='https://top-radio.org/genre/religious/'>Religious</a></li>
			<li><a href='https://top-radio.org/genre/rock/'>Rock</a></li>
			<li><a href='https://top-radio.org/genre/russian/'>Russian</a></li>
			<li><a href='https://top-radio.org/genre/scanner/'>Scanner</a></li>
			<li><a href='https://top-radio.org/genre/soul/'>Soul</a></li>
			<li><a href='https://top-radio.org/genre/sports/'>Sports</a></li>
			<li><a href='https://top-radio.org/genre/talk/'>Talk</a></li>
			<li><a href='https://top-radio.org/genre/tamil/'>Tamil</a></li>
			<li><a href='https://top-radio.org/genre/techno/'>Techno</a></li>
			<li><a href='https://top-radio.org/genre/top-40/'>Top 40</a></li>
			<li><a href='https://top-radio.org/genre/traffic/'>Traffic</a></li>
			<li><a href='https://top-radio.org/genre/trance/'>Trance</a></li>
			<li><a href='https://top-radio.org/genre/turkish/'>Turkish</a></li>
			<li><a href='https://top-radio.org/genre/variety/'>Variety</a></li>
			<li><a href='https://top-radio.org/genre/world/'>World</a></li>
			</ul>
			</div>
		</div>
		<!-- Ads -->
		<div class="row">
			<div class="large-8 small-12 columns">
				<!-- /6880916/Top-Radio-Bottom-728-300 -->
				<div id='ad-bottom'>
				<script type='text/javascript'>
				googletag.cmd.push(function() { googletag.display('ad-bottom'); });
				</script>
				</div>
			</div>
		</div>
		<footer>
			<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
			<p><?php the_tags(); ?></p>
		</footer>
		<?php // comments_template(); ?>
	</div>
</div>

<?php get_footer(); ?>