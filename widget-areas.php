<?php

/**
 * Register widget areas
 *
 * @package      Tmai
 * @author       Maffrine LaConte
 * @link         http://intwinedesignco.com/
 * @copyright    Copyright (c) 2016, Intwine Design Company
 * @license      GPL-3.0+
 */

// Register hero image widget area.
genesis_register_sidebar( array(
	'id'            => 'hero-image',
	'name'          => __( 'Hero Image', 'Tmai' ),
	'description'   => __( 'This is a hero image widget area on front page', 'Tmai' ),
) );

// Register call-to-action widget area.
genesis_register_sidebar( array(
	'id'            => 'call-to-action',
	'name'          => __( 'Call to Action', 'Tmai' ),
	'description'   => __( 'This is a call-to-action widget area on front page', 'Tmai' ),
) );

