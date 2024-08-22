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
<section class="faq">
<h3 class="title-home"><?php echo $websitesmaster['faq-title-home']; ?></h3>
    <p class="desc-home"><?php echo $websitesmaster['faq-desc-home']; ?></p>
    <div class="home-title-line"></div>
    <div class="faq__content container">
    <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'posts_per_page' => 12,
            'order' 	 => 'ASC',
            'post_type' 	 => 'faq',
            'paged'	         => $paged
        );

        $MY_QUERY = new WP_Query( $args );
        if ( $MY_QUERY->have_posts() ) :
        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
        <div class="faq__item">          
            <div class="faq__title"><?php the_title(''); ?></div>
           <div class="faq__otvet">
           <?php the_content(); ?>
          </div>
        </div>
        <?php endwhile;
        endif; ?>
        

    </div>
</section>