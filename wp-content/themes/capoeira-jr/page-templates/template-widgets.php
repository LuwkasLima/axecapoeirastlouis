<?php
/**
 * Template Name: Widgets
 *
 * Description: Page without sidebar that presents contant followd by widgets
 *
 * @since 1.0.0
 */
/*if ( ! is_front_page() )*/
get_header();
?>

	<div class="container">
		<div class="row">
			<div id="primary" <?php bavotasan_primary_attr(); ?>>
				<?php
				while ( have_posts() ) : the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1 class="entry-title"><?php the_title(); ?></h1>

					    <div class="entry-content description clearfix">
						    <?php the_content( __( 'Read more', 'arcade') ); ?>
					    </div><!-- .entry-content -->

					    <?php get_template_part( 'content', 'footer' ); ?>
					</article><!-- #post-<?php the_ID(); ?> -->
					
					<!-- Widget Area -->
					<article id="widget-left">
					</article>
					<article id="widget-center">
					</article>
					<article id="widget-right">
					</article>
					<?php
					comments_template( '', true );
				endwhile;
				?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>
