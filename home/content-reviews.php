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
<section class="homereviews">
<h3 class="title-home"><?php echo $websitesmaster['reviews-title-home']; ?></h3>
    <p class="desc-home"><?php echo $websitesmaster['reviews-desc-home']; ?></p>
    <div class="home-title-line"></div>
    <div class="homereviews__content container">
        <div class="homereviews__content-box">
        <div class="swiper homereviews__content-left">
            <div class="swiper-wrapper homereviews__content-wrapper">
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'order' 	 => 'DESC',
                    'post_type' 	 => 'otzyvy',
                    'paged'	         => $paged
                );

                $MY_QUERY = new WP_Query( $args );
                if ( $MY_QUERY->have_posts() ) :
                    while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post();
                        $id = get_post_thumbnail_id();
                        $main=wp_get_attachment_image_src( $id, 'blog' );
                        if($main) {
                            get_template_part('template-parts/content', 'reviews');
                        }
                    endwhile;
                endif; ?>
            </div>
        </div>
    </div>
    <div class="homereviews__content-box">
        <div class="swiper homereviews__content-right">
            <div class="swiper-wrapper homereviews__content-wrapper">
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'order' 	 => 'ASC',
                    'post_type' 	 => 'otzyvy',
                    'paged'	         => $paged
                );

                $MY_QUERY = new WP_Query( $args );
                if ( $MY_QUERY->have_posts() ) :
                    while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post();
                        $id = get_post_thumbnail_id();
                        $main=wp_get_attachment_image_src( $id, 'blog' );
                        if($main) {
                            get_template_part('template-parts/content', 'reviews');
                        }
                    endwhile;
                endif; ?>
            </div>
        </div>
    </div>
    </div>
</section>