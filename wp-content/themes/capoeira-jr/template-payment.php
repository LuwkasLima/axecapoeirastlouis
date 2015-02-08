<?php
/**
 * Template Name: Payment Page
 *
 * Description: A full width page template that will display 4 posts in a block without any sidebars
 *
 * @since 1.0.3
 */
if ( ! is_front_page() )
	get_header(); ?>
	
<?php
if ( 'page' == get_option('show_on_front') ) {
	include( get_page_template() );
} else {
?>


<?php if ( ! is_front_page() ) get_footer(); ?>
