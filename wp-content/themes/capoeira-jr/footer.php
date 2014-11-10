<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the main and #page div elements.
 *
 * @since 1.0.0
 */
$bavotasan_theme_options = bavotasan_theme_options();
?>
	</main><!-- main -->

	<footer id="footer" role="contentinfo">
		<div id="footer-content" class="container">
			<div class="row">
				<div class="copyright col-lg-12">
					<span class="image_footer"><img id="footer_logo" src="<?php echo get_stylesheet_directory_uri() ?>/library/images/axe-capoeira-logo.png" title="Axe Capoeira"/></span>
					<span class="pull-left"><?php printf( __( '<span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">%s</span>', 'arcade' ), get_bloginfo( 'name' ) . ' - ' . get_bloginfo( 'description' )); ?></span>
					<span class="credit-link pull-right"><i class="fa fa-male"></i><?php printf( __( 'Capoeira Jr. - A <a href="http://wordpress.org/">WordPress</a> child theme designed by %s.', 'arcade' ), '<a href="http://www.lucaslima.blog.br/">Lucas Lima</a>' ); ?></span>
				</div><!-- .col-lg-12 -->
			</div><!-- .row -->
		</div><!-- #footer-content.container -->
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
