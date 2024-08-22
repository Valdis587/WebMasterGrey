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
global $websitesmaster;
$value = redux_post_meta( 'websitesmaster', 'proekty-dop' );
 ?>
<div class="archive container">
    <div class="archive__sidebar-left">
            <div class="archive__cart-row single">
                <div class="single__news-img">
                <?php
                    $id = get_post_thumbnail_id();
                    $main=wp_get_attachment_image_src( $id, 'blog' ); ?>
               <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
                </div>
                <div class="single__news-text">
                    <h2 class="single__news-title"><?php the_title(''); ?></h2>
                    <div class="home-title-line"></div>
                    <p class="single__project-price"><?php echo $value['proekty-price']; ?> <i class="icon-ruble-sign"></i></p>
                    <div class="single__news-desc">
                    <?php the_content(); ?>
                    </div>
                </div>
                <?php if($value['proekty-link']) {?>
                <noindex class="single__project-button-wrapp">
                    <a id="butlink" class="single__project-button btn-grey" href="<?php echo $value['proekty-link']; ?>">Прейти на сайт</a>
                </noindex>
                <?php } ?>
            </div> 
            <div class="sidebar">
    <?php dynamic_sidebar( 'sidebar-catalog' ); ?>
</div><!-- #secondary -->
        </div>
    </div>
<?php
get_footer();