<?php
/**
 * Template Name: Google CSE
*/
 
get_header(); ?>

<div class="row">
	<div class="small-12 large-12 columns">
		<header>
			<h1 class="entry-title">Search results</h1>
		</header>
 		
		<script>
		  (function() {
			var cx = '014277731840718597513:ax2kkw-3bjk';
			var gcse = document.createElement('script');
			gcse.type = 'text/javascript';
			gcse.async = true;
			gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
				'//cse.google.com/cse.js?cx=' + cx;
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(gcse, s);
		  })();
		</script>
		<gcse:searchbox></gcse:searchbox>
		<gcse:searchresults></gcse:searchresults>

        <footer>
			<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
			<p><?php the_tags(); ?></p>
		</footer>
		<?php
		// comments_template(); 
		?>


	</div>
</div>

<?php get_footer(); ?>
