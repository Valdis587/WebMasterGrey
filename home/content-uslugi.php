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
<section class="homeservice">
<h3 class="title-home"><?php echo $websitesmaster['serv-title-home']; ?></h3>
    <p class="desc-home"><?php echo $websitesmaster['serv-desc-home']; ?></p>
    <div class="home-title-line"></div>
    <div class="homeservice__content container">
        <div class="homeservice__content-box item1">
        <?php   
            
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'order' 	 => 'ASC',
                'post_type' 	 => 'uslugi',
                'paged'	         => $paged,
                'posts_per_page' => 2,
            );

            $MY_QUERY = new WP_Query( $args );
            if ( $MY_QUERY->have_posts() ) :
                while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); 
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
<?php endwhile;
endif; ?>
        </div>
        <div class="homeservice__content-anim border-cart item2">
            <canvas data-src="<?php echo get_template_directory_uri() ?>/assets/images/new/step/step.gltf" id="actions-anim"></canvas>
        </div>
        <div id="homeservice__content-box" class="homeservice__content-box item3">
        <?php     
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'order' 	 => 'DESC',
                'post_type' 	 => 'uslugi',
                'paged'	         => $paged,
                'posts_per_page' => 2,
            );

            $MY_QUERY = new WP_Query( $args );
            if ( $MY_QUERY->have_posts() ) :
                while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); 
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
<?php endwhile;
endif; ?>   
    </div>
        </div> 
    </div>
</section>