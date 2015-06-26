<?php
/*
Template Name: Sidebar
*/
get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns">
		<header>
			<a href="http://top-radio.org"><img src="http://top-radio.org/wp-content/uploads/2015/05/TR01.png"></a>
		</header>
		<?php
		global $wpdb;
		$results = $wpdb->get_results( "SELECT ID, country FROM radio_station_list" );
		?>
		<?php
		get_header();?>
		<div id="page">
		<body>
		<div class="medium-6 small-12 columns">
		<h4><a href="https://www.facebook.com/OnlineTopRadio">Top Radio Facebook</a></h4>
		<br />
		<div class="fbfeed">
		<?php
			echo do_shortcode('[custom-facebook-feed id=1432179603751975 num=3 textsize=13]');
		//	echo do_shortcode('[fbf_page_feed pageID="1432179603751975" num="3" show_description="true" update="true" show_avatar="true" avatar_size="square" link_target_blank="true" feed_title="true" like_button="true" like_button_position="top"]');
		?>
		</div>
		<br />
		</div>
		</div>
		</body>
		<?php 
		if ( is_active_sidebar( 'Custom Front Page Widget'  )) {;?>
		<div class="widget-area">
		<?php dynamic_sidebar( 'Custom Front Page Widget' ); ?>
		</div>
		<?php };?>
		<?php get_template_part( 'loop', 'page' );?>
		</div>
		<?php get_footer();
		?>
		<footer>
			<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
			<p><?php the_tags(); ?></p>
		</footer>
		<?php comments_template(); ?>


	</div>
</div>

<?php get_footer(); ?>