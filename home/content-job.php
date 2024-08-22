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
<section class="homeproject gradient-top">
<h3 class="title-home"><?php echo $websitesmaster['job-title-home']; ?></h3>
    <p class="desc-home"><?php echo $websitesmaster['job-desc-home']; ?></p>
    <div class="home-title-line"></div>
        <div class="swiper homeproject__content container">
               <div class="swiper-wrapper homeproject__wrapper cart">
               <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'posts_per_page' => 10,
                'order' 	 => 'DESC',
                'post_type' 	 => 'proekty',
                'paged'	         => $paged
            );

            $MY_QUERY = new WP_Query( $args );
            if ( $MY_QUERY->have_posts() ) :
                while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>

                    <?php get_template_part( 'template-parts/content', 'proekty' ); ?>

                <?php endwhile;
            endif; ?>
               </div> 
               <div class="swiper-button-prev"></div>
               <div class="swiper-button-next"></div>
        </div>
</section>