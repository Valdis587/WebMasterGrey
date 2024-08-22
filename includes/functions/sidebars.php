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
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function websitesmaster_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Сайдбар новости', 'websitesmaster' ),
			'id'            => 'sidebar-news',
			'description'   => esc_html__( 'Add widgets here.', 'websitesmaster' ),
			'before_widget' => '<section id="%1$s" class="sidebar__widget border-cart widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="sidebar__title">',
			'after_title'   => '<span class="sidebar__line"></span></h3>',
		)
	);
}
add_action( 'widgets_init', 'websitesmaster_widgets_init' );

function websitesmaster_widgets_init_catalog() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Сайдбар каталог', 'websitesmaster' ),
			'id'            => 'sidebar-catalog',
			'description'   => esc_html__( 'Add widgets here.', 'websitesmaster' ),
			'before_widget' => '<section id="%1$s" class="sidebar__widget border-cart widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="sidebar__title">',
			'after_title'   => '<span class="sidebar__line"></span></h3>',
		)
	);
}
add_action( 'widgets_init', 'websitesmaster_widgets_init_catalog' );