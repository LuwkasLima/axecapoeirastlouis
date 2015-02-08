<?php
/**
 * Include additional Google fonts
 *
 * @since 1.0
 */
function load_fonts() {
            wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Ubuntu');
            wp_enqueue_style( 'googleFonts');
        }
    
    add_action('wp_print_styles', 'load_fonts');

/**
 * Custom Function to Include a favicon
 *
 * @since 1.0
 */
function favicon_link() {
    echo '<link rel="shortcut icon" href="http://canadawebpros.ca/projects/axevancouver/wp-content/uploads/2014/03/axe-capoeira-fevicone.png">' . "\n";
	echo '<link rel="icon" href="http://canadawebpros.ca/projects/axevancouver/wp-content/uploads/2014/03/axe-capoeira-fevicone1.png" type="image/gif">' . "\n";
	echo '<link rel="icon" href="http://canadawebpros.ca/projects/axevancouver/wp-content/uploads/2014/03/axe-capoeira-fevicone2.png" type="image/png">' . "\n";
	echo '<link rel="apple-touch-icon" href="http://canadawebpros.ca/projects/axevancouver/wp-content/uploads/2014/03/axe-capoeira-fevicone3.png">' . "\n";
}
add_action( 'wp_head', 'favicon_link' );

/**
 * Custom Function to Include a new widget area
 *
 * @since 1.0
 */
 add_action( 'widgets_init', 'capoeirajr_widgets_init' );
 if ( ! function_exists( 'bavotasan_widgets_init' ) ) :
function capoeirajr_widgets_init() {
	$bavotasan_theme_options = bavotasan_theme_options();

	register_sidebar( array(
		'name' => __( 'Paypal area', 'arcade' ),
		'id' => 'payment-page-area',
		'description' => __( 'Area on the payment page designed specifically for pay options buttons. Add at least one widget to make it appear.', 'arcade' ),
		'before_widget' => '<aside id="%1$s" class="payment-widget col-md-3 %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="payment-widget-title">',
		'after_title' => '</h3>',
	) );
}
endif; // capoeirajr_widgets_init
