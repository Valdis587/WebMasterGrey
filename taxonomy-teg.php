<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WebSitesMaster
 */

get_header();
global $websitesmaster;
get_template_part( 'template-parts/content', 'head' );
?>
<section class="homeservice">
<h3 class="title-home"><?php echo $websitesmaster['serv-title-home']; ?></h3>
    <p class="desc-home"><?php echo $websitesmaster['serv-desc-home']; ?></p>
    <div class="home-title-line"></div>
    <div class="homeservice__content-teg container">
        <?php       
    $termId   = get_queried_object_id(); 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' 	 => 'uslugi',
                'paged'	         => $paged,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'teg',
                        'field'    => 'id',
                        'terms'    => $termId
                    )
              )
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
      <div class="container">
        <div id="teg-anim-w" class="homeservice__content-teg-anim border-cart">
        <canvas id="teg-anim" data-src="<?php echo get_template_directory_uri() ?>/assets/images/new/serv/serv.gltf"></canvas>
        </div>
      </div>
        </div> 
    </div>
</section>
<?php
get_footer();