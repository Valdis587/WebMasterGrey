<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WebSitesMaster
 */
global $websitesmaster;
?>
</div>
<footer class="footer gradient-bottom">
    <div class="footer__content container">
        <div class="footer__info">
            <div class="footer__logo">
            <?php get_template_part( 'template-parts/content', 'logo' ); ?>
        </div>
        <div class="footer__text">
        <?php if($websitesmaster['foo-text']) { echo $websitesmaster['foo-text']; }?>
        </div>
        </div>
        <div class="footer__menu">
            <h5 class="footer__title"><?php echo $websitesmaster['foo-title2']; ?></h5>
            <?php if( has_nav_menu('menu-page') ) {
                WebSitesMaster_menu_page();
            }?>
        </div>
        <div class="footer__menu">
            <h5 class="footer__title"><?php echo $websitesmaster['foo-title3']; ?></h5>
            <?php if( has_nav_menu('menu-service') ) {
                WebSitesMaster_menu_service();
            }?>
        </div>
        <div class="footer__contact">
            <h5 class="footer__title"><?php echo $websitesmaster['foo-title1']; ?></h5>
            <?php get_template_part( 'template-parts/content', 'social' ); ?>
        </div>
    </div>
    <div class="footer__copy"><?php if($websitesmaster['foo-copy']) { echo $websitesmaster['foo-copy']; }?></div>
    <div onclick="goUp();" class="footer__up footer__up-hide btn-grey"><i class="icon-angle-down"></i></div>
</footer>
</div>
<?php if($websitesmaster['google']) { echo $websitesmaster['google']; } 
if($websitesmaster['yandex']) { echo $websitesmaster['yandex']; } 
wp_footer(); ?>
</body>
</html>
