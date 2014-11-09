<?php
/**
 * The first/left sidebar widgetized area.
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @since 1.0.0
 */
?>
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>
