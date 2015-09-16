<?php
/**
 * Template Name: Google CSE
*/
 
get_header(); ?>
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
/* Highlight the pagination buttons at the bottom of search results */
.gsc-cursor-page {
	font-size: 1.5em;
	padding: 4px 8px;
	border: 2px solid #ccc;
}
</style>

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
