<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */
global $websitesmaster;
$value = redux_post_meta( 'websitesmaster', 'uslugi' ); 
?>
  <div class="homeservice__box-item border-cart">
<h3 class="homeservice__box-item-title"><?php the_title(''); ?></h3>
<p class="homeservice__box-item-text"><?php echo $value['uslugi-desc']; ?></p>
<div class="homeservice__box-item-bottom">
<a class="btn-grey" href="<?php the_permalink(); ?>">Продолжить</a>
<img class="rot-item" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="">
</div>
</div>