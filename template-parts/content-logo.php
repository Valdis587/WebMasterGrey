<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */
global $websitesmaster;
if(is_front_page()) { ?>
    <img src="<?php echo $websitesmaster['logo']['url']; ?>" alt="<?php bloginfo('name'); ?>">
    <?php } else { ?>
         <a href="<?php echo home_url(); ?>">
         <img src="<?php echo $websitesmaster['logo']['url']; ?>" alt="<?php bloginfo('name'); ?>">
     </a>
    <?php } ?>
