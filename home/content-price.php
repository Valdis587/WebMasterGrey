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
<section class="homeprice">
    <h3 class="title-home"><?php echo $websitesmaster['price-home-title']; ?></h3>
    <p class="desc-home"><?php echo $websitesmaster['price-home-desc']; ?></p>
    <div class="home-title-line"></div>
    <div class="homeprice__content container">
    <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'order' 	 => 'ASC',
            'post_type' 	 => 'price',
            'paged'	         => $paged
        );

        $MY_QUERY = new WP_Query( $args );
        if ( $MY_QUERY->have_posts() ) :
            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); 
            $value = redux_post_meta( 'websitesmaster', 'price-dop' )
            ?>
        <div class="homeprice__item border-cart">
            <div class="homeprice__item-left">
                <h3 class="homeprice__item-title"><?php the_title(''); ?></h3>
                <p class="homeprice__item-price"><?php echo $websitesmaster['price-price']; ?> <i class="icon-ruble-sign"></i></p>
            </div>
            <div class="homeprice__item-right">
                <div class="homeprice__item-logo">
                    <img class="rot-item" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="">
                </div>
                <ul class="homeprice__item-list">
                <?php
                        if($value['item-price']) {
                            $i =0; 
							foreach ($value['price-serv'] as $tab => $key) { $i++ ?>
                    <li><i class="icon-check"></i><?php echo $value ['price-serv'][$i-1]; ?></li>
                    <?php } } ?>
                </ul>
                <div class="homeprice__item-button">
                    <a target="_blank" rel="nofollow" href="" class="homerrice__item-but btn-grey"><i class="icon-telegram-plane"></i> Задать вопрос</a>
                </div>
            </div>
        </div>
        <?php endwhile;
        endif; ?>    
    </div>
</section>