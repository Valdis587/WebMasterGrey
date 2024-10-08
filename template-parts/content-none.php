<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Ничего не найдено', 'websitesmaster' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php

			get_search_form(); ?>

</section><!-- .no-results -->
