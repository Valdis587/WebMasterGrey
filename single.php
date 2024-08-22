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
while ( have_posts() ) :
	the_post(); ?>
<div class="single__news-img">
				<?php
                    $id = get_post_thumbnail_id();
                    $main=wp_get_attachment_image_src( $id, 'blog' );
                    ?>
               <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
                </div>
                <div class="single__news-info">
                    <span class="single__news-autor"><i class="icon-user-alt"></i>Автор: <?php the_author(); ?></span>
                    <span class="single__news-date"><i class="icon-calendar-alt"></i><?php the_date( 'Y-m-d'); ?></span>
                </div>
                <div class="single__news-text">
                    <h2 class="single__news-title"><?php the_title(''); ?></h2>
                    <div class="home-title-line"></div>
                    <div class="single__news-desc">
					<?php the_content(); ?>
                    </div>
                </div>
				<?php 	// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
do_action( 'end_wrapper_single_sidebar_right' );
get_footer();
