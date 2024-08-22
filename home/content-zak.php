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
<section class="homezak ">
<h3 class="title-home"><?php echo $websitesmaster['zak-title-home']; ?></h3>
    <p class="desc-home"><?php echo $websitesmaster['zak-desc-home']; ?></p>
    <div class="home-title-line"></div>
    <div class="homezak__content container">
        <div id="homezak__content-left" class="homezak__content-left border-cart">
            <div class="homezak__text">
            <p><?php echo $websitesmaster['zak-text-item1']; ?></p>
        <p class="homezak__small-title"><?php echo $websitesmaster['zak-title-blue']; ?></p>
        <p><?php echo $websitesmaster['zak-text-item2']; ?></p>
        </div>
        <?php get_template_part( 'template-parts/content', 'social' ); ?>
        </div>
        <div id="homezak__content-right" class="homezak__content-right border-cart">
            <canvas id="homezak__animation" data-src="<?php echo get_template_directory_uri() ?>/assets/images/new/stol/stol.gltf"></canvas>
        </div>
    </div>
</section>