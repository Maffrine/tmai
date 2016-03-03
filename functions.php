<?php
/**
 * Child theme customizations
 *
 * @package      Tmai
 * @author       Maffrine LaConte
 * @link         http://intwinedesignco.com/
 * @copyright    Copyright (c) 2016, Intwine Design Company
 * @license      GPL-3.0+
 */



// Load child theme textdomain.
load_child_theme_textdomain( tmai );
    
add_action( 'genesis_setup', 'tmai_setup' );

/**
 * Theme setup.
 *
 * Attach all of the site-wide functions to the correct hooks and filters. All
 * the functions themselves are defined below this setup function.
 *
 * @since 1.0.0
 */

function tmai_setup() {
    
    // Define child theme.
    define( 'CHILD_THEME_NAME', 'Tmai' );
    define( 'CHILD_THEME_URL', 'http://intwinedesignco.com' );
    define( 'CHILD_THEME_VERSION', '1.0.0' );
    
    // Add HTML5 markup structure.
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

    // Add Accessibility support.
    add_theme_support( 'genesis-accessibility', array( 'headings', 'drop-down-menu',  'search-form', 'skip-links', 'rems' ) );

    // Add viewport meta tag for mobile browsers.
    add_theme_support( 'genesis-responsive-viewport' );


    // Add support for 3-column footer widgets.
    add_theme_support( 'genesis-footer-widgets', 3 );
    
    // Add theme widget areas.
	include_once( get_stylesheet_directory() . '/includes/widget-areas.php' );
    
    

    
}  