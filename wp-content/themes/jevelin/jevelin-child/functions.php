<?php
/**
 * Theme functions file
 */

/**
 * Enqueue parent theme styles first
 * Replaces previous method using @import
 * <http://codex.wordpress.org/Child_Themes>
 */

add_action( 'wp_enqueue_scripts', 'jevelin_child_enqueue', 99 );

function jevelin_child_enqueue() {
	wp_enqueue_style( 'jevelin-child-style', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_script( 'jevelin-child-scripts', get_stylesheet_directory_uri() . '/js/scripts.js' );
}

/**
 * Add your custom functions below
 */
