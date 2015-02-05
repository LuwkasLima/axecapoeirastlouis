<?php
/**
 * The first/left sidebar widgetized area.
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @since 1.0.0
 */
?>
	<div id="secondary" <?php bavotasan_sidebar_class(); ?> role="complementary">
		<?php if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>
		<?php endif; ?>
	</div><!-- #secondary.widget-area -->
