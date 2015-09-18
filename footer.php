<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>
<style type='text/css'>
.autoCenter {
    margin: 0 auto;
}
.bbBody {
    font-size: 12px;
    text-align: center;
}
.trBottomBar {
    width: 100%;
    height: 50px;
    background-color: #A9D0F5;
}
#trBbInner {
    background-color: #A9D0F5;
    width: 400px;
    padding-top: 8px;
}

</style>

</section>
<footer class="row">
	<?php do_action( 'foundationpress_before_footer' ); ?>
	<?php dynamic_sidebar( 'footer-widgets' ); ?>
	<?php do_action( 'foundationpress_after_footer' ); ?>
</footer>
<a class="exit-off-canvas"></a>

	<?php do_action( 'foundationpress_layout_end' ); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>