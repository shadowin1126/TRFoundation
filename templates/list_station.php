<?php
/*
Template Name: List By Station
*/
get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns">
		<header>
			<h1 class="entry-title">Listing By Station</h1>
		</header>
		<?php
		global $wpdb;
		$results = $wpdb->get_results( "SELECT * FROM radio_station_list ORDER BY name" );
		?>
		<div class="row">
			<div class="small-12 columns">
			<?php
			echo '<hr><br /><br /><br />';
			foreach ($results as $row) {
				$link = 'http://top-radio.org/'.$row->country_id.'/'.$row->tag.'/';
				echo "<li><a href=$link>".$row->name.' ('.$row->country.')'."</a></li><br />";
			}
			?>
			</div>
		</div>
		<footer>
			<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
			<p><?php the_tags(); ?></p>
		</footer>
		<?php comments_template(); ?>


	</div>
</div>

<?php get_footer(); ?>