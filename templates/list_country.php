<?php
/*
Template Name: List By Country
*/
get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns">
		<header>
			<h1 class="entry-title">Countries</h1>
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
		global $wpdb;
		$results = $wpdb->get_results( "SELECT ID, country, country_id FROM radio_station_list" );
		?>
		<div class="row">
			<div class="small-12 columns">
			<?php
			echo '<br />';
			echo '<ul>';
			$countAD = 0;
			foreach ($results as $row) {
				if (empty($countryID) || ($row->country_id != $countryID)) {
					$countryID = $row->country_id;
					$country = $row->country;
					$count = $wpdb->get_var( "SELECT COUNT(*) FROM radio_station_list WHERE country_id = '$countryID'" );
					$link = 'https://top-radio.org/'.$countryID.'/';
					if ($countAD == 10) {
						?>
						</ul>
						<!-- /6880916/Top-Radio-After-728-300 -->
						<div id='ad-after'>
						<script type='text/javascript'>
						googletag.cmd.push(function() { googletag.display('ad-after'); });
						</script>
						</div>
						<br />
						<ul>
						<?php
					}
					echo "<li><a href=$link>".$country.' ('.$count.')'."</a></li>";
					$countAD++;
				}
			}
			echo '</ul>';
			?>
			</div>
		</div>
		<!-- Ads -->
		<div class="row">
			<div class="small-12 columns">
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