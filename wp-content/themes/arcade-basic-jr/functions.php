<?php
/**
 * Include additional Google fonts
 *
 * @since 1.0
 */
function load_fonts() {
            wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Permanent+Marker');
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
