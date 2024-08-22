<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */
global $websitesmaster;
$value = redux_post_meta( 'websitesmaster', 'reviews-dop' );
?>
<div id="post-<?php the_ID(); ?>" class="swiper-slide cart__reviews border-cart">
    <div class="cart__reviews-content">
        <div class="cart__reviews-img">
        <?php
            $id = get_post_thumbnail_id();
            $main=wp_get_attachment_image_src( $id, 'blog' );
          if ($main) {?>
                    <img src="<?php echo $main[0]; ?>" alt="<?php bloginfo('description'); ?>">
                <?php } else { ?>
                    <img class="bg-bl" width="70px" height="70px" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="<?php bloginfo('name'); ?>">
                <?php } ?>
        </div>
    <div class="cart__reviews-text">
        <p class="cart__reviews-name"><?php the_title(''); ?></p>
        <p class="cart__reviews-job"><?php echo $value['title-reviews']; ?></p>
        <p class="cart__reviews-date"><?php echo $value['reviews-date']; ?></p>
        <p class="cart__reviews-reviews"><?php echo $value['reviews-desc']; ?></p>
    </div>
    </div>
</div><!-- #post-<?php the_ID(); ?> -->