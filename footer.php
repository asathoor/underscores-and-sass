<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package petj-17
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'petj-17' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'CMS: %s', 'petj-17' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '&copy; Per Thykjaer Jensen 2017. Theme: %1$s based on %2$s.', 'petj-17' ), 'petj-17', '<a href="https://github.com/asathoor/underscores-and-sass">underscores-and-sass</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- scripts -->
<script>

// navigation icons
jQuery(document).ready(function($) {
		
	// font awesome before
	$('.nav-previous a')
		.prepend('<i class="fa fa-chevron-circle-left" aria-hidden="true" style="margin-left:2rem;font-size:2rem;"></i> ');

	// font awesome next
	$('.nav-next a')
		.append(' <i class="fa fa-chevron-circle-right" aria-hidden="true" style="font-size:2rem;"></i>');

})

</script>


</body>
</html>
