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
    <h1 class="header__center-title"><?php echo $websitesmaster['title-head']; ?></h1>
      <?php }  else { ?>
       <p class="header__center-title"><?php echo $websitesmaster['title-head']; ?></p>
<?php } 
             
