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
 <ul class="icon-list">
 <?php if($websitesmaster['tg']) { ?>
    <li><a target="_blank" rel="nofollow" aria-label="telegram" href="https://t.me/<?php echo $websitesmaster['tg']; ?>"><i class="icon-telegram-plane"></i></a></li>
    <?php } ?>
    <?php if($websitesmaster['sk']) { ?>
    <li><a target="_blank" rel="nofollow" aria-label="skype" href="skype:<?php echo $websitesmaster['sk']; ?>"><i class="icon-skype"></i></a></li>
    <?php } ?>
    <?php if($websitesmaster['vb']) { ?>
    <li><a target="_blank" rel="nofollow" aria-label="viber" href="https://viber.click/<?php echo $websitesmaster['vb']; ?>"><i class="icon-viber"></i></a></li>
    <?php } ?>
    <?php if($websitesmaster['wh']) { ?>
    <li><a target="_blank" rel="nofollow" aria-label="whatsapp" href="https://wa.clck.bar/<?php echo $websitesmaster['wh']; ?>"><i class="icon-whatsapp"></i></a></li>
    <?php } ?>
</ul>
