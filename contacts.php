<?php
/*
Template Name: Контакты
*/
get_header();
get_template_part( 'template-parts/content', 'head');
global $websitesmaster;
?>
<div class="page container">
    <div class="page__content">
        <div class="page__item page__contacts-left">
            <ul class="page__contact-list">
           <?php if($websitesmaster['phone']) { ?>
    <li><i class="icon-phone-alt"></i><a href="tel:<?php echo str_replace(array("(", ")", "-", " "), "", $websitesmaster['phone']); ?>"><?php echo $websitesmaster['phone']; ?></a></li>
    <?php } ?>
    <?php if($websitesmaster['email']) { ?>
    <li><i class="icon-envelope"></i><a href="mailto:<?php echo $websitesmaster['email']; ?>"><?php echo $websitesmaster['email']; ?></a></li>
    <?php } ?>
    <?php if($websitesmaster['adres']) { ?>
    <li><i class="icon-map-marker-alt"></i><?php echo $websitesmaster['adres']; ?></li>
    <?php } ?>
    <?php if($websitesmaster['time-york']) { ?>
    <li><i class="icon-clock"></i> <?php echo $websitesmaster['time-york']; ?></li>
    <?php } ?>
            </ul>
            <?php get_template_part( 'template-parts/content', 'social' ); ?>
        </div>
        <div class="page__item">
        <?php if($websitesmaster['map']) { 
            echo $websitesmaster['map'];
        } ?>
        </div>
    </div>
</div>
<?php
get_footer();