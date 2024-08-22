<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WebSitesMaster
 */

get_header();
get_template_part( 'template-parts/content', 'head' );
do_action( 'start_wrapper_single_sidebar_right' ); 
global $websitesmaster;
$value = redux_post_meta( 'websitesmaster', 'uslugi' );?>
   <div class="single__service-top">
                    <div id="single__service-left" class="single__service-left">
                        <canvas id="single__service-anim" data-src="<?php echo get_template_directory_uri() ?>/assets/images/new/serv/serv.gltf"></canvas>
                    </div>
                    <div id="single__service-right" class="single__service-right">
                        <h2 class="single__service-right-title"><?php echo $value ['title-uslugi']; ?></h2>
                        <div class="single__service-right-info border-cart">
                        <?php
                        if($value['item-uslugi']) {
                            $i =0; 
							foreach ($value['uslugi-left'] as $tab => $key) { $i++ ?>
                            <div class="single__service-right-info-item">
                                <span class="single__service-info-left"><?php echo $value ['uslugi-left'][$i-1]; ?></span>
                                <span class="single__service-info-right"><?php echo $value ['uslugi-right'][$i-1]; ?></span>
                            </div>
                            <?php } } ?>
                        </div>
                    </div>
                </div>
                <div class="single__service-butoom">
                    <h2 class="single__news-title"><?php the_title(''); ?></h2>
                    <div class="home-title-line"></div>
                    <div class="single__news-desc">
                    <?php the_content(); ?>
                    </div>
                </div>
                <div class="single__project-button-wrapp" >
                <a  class="single__project-button btn-grey" href="https://t.me/<?php echo $websitesmaster['tg']; ?>"><i class="icon-telegram-plane"></i> Сделать заказаз</a>
                </div>
<?php do_action( 'end_wrapper_single_sidebar_right' );
get_footer();