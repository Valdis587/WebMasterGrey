<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */
global $websitesmaster;
?>
<section class="homenews ">
<h3 class="title-home"><?php echo $websitesmaster['news-title-home']; ?></h3>
    <p class="desc-home"><?php echo $websitesmaster['news-desc-home']; ?></p>
    <div class="home-title-line"></div>
    <div class="swiper homenews__content container ">
        <div class="swiper-wrapper homenews__wrapper cart">
        <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'order' 	 => 'DESC',
                'post_type' 	 => 'post',
                'paged'	         => $paged
            );

            $MY_QUERY = new WP_Query( $args );
            if ( $MY_QUERY->have_posts() ) :
                while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>

                    <?php get_template_part( 'template-parts/content', get_post_type() ); ?>

                <?php endwhile;
            endif; ?>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>