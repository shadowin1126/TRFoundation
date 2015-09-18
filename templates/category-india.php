<?php
/*
Template Name: Category - India
*/
get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns">
		<header>
			<h1 class="entry-title">India</h1>
		</header>
		<?php
		global $wpdb;
		$results = $wpdb->get_results( "SELECT * FROM radio_station_list ORDER BY country_id, tag" );
		$category = 'india';
		?>
		<div class="row">
			<div class="small-12 columns">
			<?php
			echo '<br /><br />';
			echo '<ul>';
			foreach ($results as $row) {
				if (strpos($row->description,$category) !== false) {
					$link = '/'.$row->country_id.'/'.$row->tag.'/';
					echo "<li><a href=$link>".$row->name.' ('.$row->country.')'."</a></li><br />";
				}
			}
			echo '</ul>';
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