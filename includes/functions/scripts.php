<?php
/**
 * WebSitesMaster functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WebSitesMaster
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Enqueue scripts and styles.
 */
function websitesmaster_scripts() {
    wp_enqueue_style('websitesmaster-styles', get_template_directory_uri() . '/assets/css/style.min.css', array(), _S_VERSION);

	wp_enqueue_style( 'websitesmaster-style', get_stylesheet_uri(), array(), _S_VERSION );
	

	wp_enqueue_script( 'websitesmaster-main', get_template_directory_uri() . '/assets/js/main.min.js', array(), _S_VERSION, true );

    wp_enqueue_script( 'websitesmaster-lib', get_template_directory_uri() . '/assets/js/lib.min.js', array(), _S_VERSION, true );

    wp_enqueue_script( 'websitesmaster-scripts', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'websitesmaster_scripts' );

function mihdan_add_async_attribute( $tag, $handle ) {
    if ( 'websitesmaster-lib' !== $handle ) {
        return $tag;
    }

    return str_replace( ' src', ' async="async" src', $tag );
}
add_filter( 'script_loader_tag', 'mihdan_add_async_attribute', 10, 2 );


function mihdan_add_async_attribute2( $tag, $handle ) {
    if ( 'websitesmaster-scripts' !== $handle ) {
        return $tag;
    }

    return str_replace( ' src', ' async="async" src', $tag );
}
add_filter( 'script_loader_tag', 'mihdan_add_async_attribute2', 10, 2 );