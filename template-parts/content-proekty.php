<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */
global $websitesmaster;
$value = redux_post_meta( 'websitesmaster', 'proekty-dop' );
?>
<div id="post-<?php the_ID(); ?>" class="swiper-slide cart__project border-cart">
    <div class="cart__project-img">
    <?php
                    $id = get_post_thumbnail_id();
                    $main=wp_get_attachment_image_src( $id, 'job' );
                    ?>
                    <img src="<?php echo $main[0]; ?>" alt="<?php bloginfo('name') ?>"></a>
    </div>
    <div class="cart__project-icon"><i class="icon-cogs"></i></div>
    <div class="cart__project-info">
        <a href="<?php the_permalink(); ?>" class="cart__project-name"><?php the_title(''); ?></a>
        <p class="cart__project-job"><?php echo $value['title-proekty']; ?></p>
        <p class="cart__project-price"><?php echo $value['proekty-price']; ?> <i class="icon-ruble-sign"></i></p>
        <a class="cart__project-link btn-grey" href="<?php the_permalink(); ?>">Подробнее</a>
    </div>
</div><!-- #post-<?php the_ID(); ?> -->