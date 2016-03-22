<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cezar-Grigoriu
 */

?>

	</div><!-- #content -->


	<footer id="colophon" class="site-footer mdl-mini-footer" role="contentinfo">
		
		<div class="site-info mdl-mini-footer__left-section">
			<div class="mdl-logo"><?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'cezar-grigoriu' ), 'cezar-grigoriu', '<a href="http://designify.com" rel="designer">Cosmin Burdalescu</a>' ); ?></div>
			<ul class="mdl-mini-footer__link-list">
				<li><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'cezar-grigoriu' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'cezar-grigoriu' ), 'WordPress' ); ?></a></li>
			</ul>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</main>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
