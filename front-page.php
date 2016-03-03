<?php

/**
 * Front page template
 *
 * @package      Tmai
 * @author       Maffrine LaConte
 * @link         http://intwinedesignco.com/
 * @copyright    Copyright (c) 2016, Intwine Design Company
 * @license      GPL-3.0+
 */


// Hook hero image widget area after header
add_action( 'genesis_after_header', 'tmai_after_header_widget' );
	function tmai_after_header_widget() {
	
		genesis_widget_area( 'hero-image', array(
			'before' => '<div class="hero-image">',
			'after' => '</div>',
	) );
}

// Hook call to action widget area after content
add_action( 'genesis_after_content', 'tmai_after_content_widget' );
	function tmai_after_content_widget() {
	
		genesis_widget_area( 'call-to-action', array(
			'before' => '<div class="call-to-actionAdd ">',
			'after' => '</div>',
	) );
}


// Call up Genesis function
genesis();