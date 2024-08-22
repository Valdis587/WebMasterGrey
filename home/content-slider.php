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
<section class="homeslider gradient-bottom">
        <div class="swiper homeslider__content">
            <div class="swiper-wrapper homeslider__content-wrap">
            <?php
                        if($websitesmaster['item-slider']) {
                            $i =0; 
							foreach ($websitesmaster['slider-title1'] as $tab => $key) { $i++ ?>
                <div class="swiper-slide homeslider__item">
                    <h2 class="homeslider__title-big"><?php echo $websitesmaster['slider-title1'][$i-1]; ?></h2>
                    <h2 class="homeslider__title-small"><?php echo $websitesmaster['slider-title2'][$i-1]; ?></h2>
                </div>
                <?php } } ?>
            </div>
            <p class="homeslider__price"><?php echo $websitesmaster['slider-price']; ?></p>
        </div>
</section>