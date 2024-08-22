<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */

?>
<div id="post-<?php the_ID(); ?>" class="swiper-slide cart__news border-cart">
    <div class="cart__news-img">
	<?php
        $id = get_post_thumbnail_id();
        $main=wp_get_attachment_image_src( $id, 'blog' );
        ?>
         <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
    </div>
    <div class="cart__news-date-info">
        <p class="cart__news-date-day"><?php the_date('d'); ?></p>
        <p class="cart__news-date-mon"><?php echo get_the_date( 'F'); ?></p>
    </div>
    <div class="cart__news-info">
        <a class="cart__news-title" href="<?php the_permalink(); ?>"><?php the_title(''); ?></a>
        <p class="cart__news-desc"><?php do_excerpt(get_the_excerpt(), 14); ?> ...</p>
        <a class="cart__news-link" href="<?php the_permalink(); ?>">Читать даллее...</a>
    </div>
</div><!-- #post-<?php the_ID(); ?> -->

