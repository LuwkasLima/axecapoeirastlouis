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
					<span class="pull-left"><?php printf( __( '<span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">%s</span> is licensed under <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>.', 'arcade' ), ' <a href="' . home_url() . '">' . get_bloginfo( 'name' ) .'</a>' ); ?></span>
					<span class="credit-link pull-right"><i class="fa fa-leaf"></i><?php printf( __( 'Designed by %s.', 'arcade' ), '<a href="https://themes.bavotasan.com/">bavotasan.com</a> and <a href="https://www.lucaslima.blog.br/">Lucas Lima</a>' ); ?></span>
				</div><!-- .col-lg-12 -->
			</div><!-- .row -->
		</div><!-- #footer-content.container -->
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
