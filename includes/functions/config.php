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

require get_template_directory() . '/includes/functions/scripts.php';

require get_template_directory() . '/includes/functions/settings.php';

require get_template_directory() . '/includes/functions/prymari-menu.php';

require get_template_directory() . '/includes/functions/footer-menu.php';

require get_template_directory() . '/includes/functions/breadcrumbs.php';

require get_template_directory() . '/includes/functions/paginations.php';

require get_template_directory() . '/includes/functions/hoock.php';

require get_template_directory() . '/includes/functions/sidebars.php';

require get_template_directory() . '/includes/functions/reviews.php';

require get_template_directory() . '/includes/functions/proekty.php';

require get_template_directory() . '/includes/functions/uslugi.php';

require get_template_directory() . '/includes/functions/price.php';

require get_template_directory() . '/includes/functions/faq.php';

require get_template_directory() . '/includes/admin/redux.php';

require get_template_directory() . '/includes/admin/theme/config.php';

require get_template_directory() . '/widgets/category.php';

require get_template_directory() . '/widgets/news.php';

require get_template_directory() . '/widgets/job.php';

require get_template_directory() . '/widgets/reviews.php';

require get_template_directory() . '/widgets/serv.php';

require get_template_directory() . '/widgets/anim.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}