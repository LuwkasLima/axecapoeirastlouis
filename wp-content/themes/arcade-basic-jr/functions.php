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
