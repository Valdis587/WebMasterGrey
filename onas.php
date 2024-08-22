<?php
/*
Template Name: О нас
*/
get_header();
get_template_part( 'template-parts/content', 'head' ); 
global $websitesmaster;
?>
<div class="page container">
    <div class="page__content">
        <div id="page__left" class="page__item">
          <div class="page__text">
            <p><?php echo $websitesmaster['onas-desc']; ?></p>
          </div>
        </div>
        <div class="page__item">
            <div class="page__img">
                <canvas id="ONas__animate" data-src="<?php echo get_template_directory_uri() ?>/assets/images/new/bike/bike.gltf"></canvas>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();