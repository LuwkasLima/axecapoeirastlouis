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
					<span class="pull-left"><?php printf( __( 'C<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Axé Capoeira St. Louis</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.lucaslima.blog.br" property="cc:attributionName" rel="cc:attributionURL">Lucas Lima</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>.<br />Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="https://themes.bavotasan.com/" rel="dct:source">https://themes.bavotasan.com/</a>.', 'arcade' ), date( 'Y' ), ' <a href="' . home_url() . '">' . get_bloginfo( 'name' ) .'</a>' ); ?></span>
					<span class="credit-link pull-right"><i class="fa fa-leaf"></i><?php printf( __( 'Designed by %s.', 'arcade' ), '<a href="https://themes.bavotasan.com/">bavotasan.com</a>' ); ?></span>
				</div><!-- .col-lg-12 -->
			</div><!-- .row -->
		</div><!-- #footer-content.container -->
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
