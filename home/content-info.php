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
<section class="homeinfo gradient-top">
<h3 class="title-home"><?php echo $websitesmaster['info-title-home']; ?></h3>
    <p class="desc-home"><?php echo $websitesmaster['info-desc-home']; ?></p>
    <div class="home-title-line"></div>
        <div class="homeinfo__content container">
            <div class="homeinfo__content-box border-cart box1">
            <?php echo $websitesmaster['info-desc-box1']; ?>
                <div class="homeinfo__box-item-bottom">
                    <a class="btn-grey" href="https://t.me/<?php echo $websitesmaster['tg']; ?>"><i class="icon-telegram-plane"></i> Сделать заказ</a>
                    <img class="rot-item" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="">
                </div>
            </div>
            <div class="homeinfo__content-box border-cart box2">
            <?php echo $websitesmaster['info-desc-box2']; ?>
                <div class="homeinfo__box-item-bottom">
                    <a class="btn-grey" href="https://t.me/<?php echo $websitesmaster['tg']; ?>"><i class="icon-telegram-plane"></i> Сделать заказ</a>
                    <img class="rot-item" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="">
                </div>
            </div>
            <div id="homeinfo__content-box" class="homeinfo__content-box border-cart box3">
               <canvas id="homeinfo__shere" data-src="<?php echo get_template_directory_uri() ?>/assets/images/new/info/info.gltf"></canvas>
            </div>
            <div class="homeinfo__content-box border-cart box4">
            <?php echo $websitesmaster['info-desc-box3']; ?>        
                <div class="homeinfo__box-item-bottom">
                    <a class="btn-grey" href="https://t.me/<?php echo $websitesmaster['tg']; ?>"><i class="icon-telegram-plane"></i> Сделать заказ</a>
                    <img class="rot-item" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="">
                </div>
            </div>
            <div class="homeinfo__content-box border-cart box5">
            <?php echo $websitesmaster['info-desc-box4']; ?>
                <div class="homeinfo__box-item-bottom">
                    <a class="btn-grey" href="https://t.me/<?php echo $websitesmaster['tg']; ?>"><i class="icon-telegram-plane"></i> Сделать заказ</a>
                    <img class="rot-item" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="">
                </div>
            </div>
        </div>
</section>