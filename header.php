<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WebSitesMaster
 */
global $websitesmaster;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" sizes="120x120" href="<?php echo home_url(); ?>/favicon.svg" type="image/svg+xml" />
    <link rel="shortcut icon" href="<?php echo home_url(); ?>/favicon.ico" type="image/x-icon" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">
      <!-- Mouse cursor area start here -->
   <div class="mouse-cursor cursor-outer"></div>
   <div class="mouse-cursor cursor-inner"></div>
   <!-- Mouse cursor area end here -->
<header class="header">
    <div class="header__top-line">
        <div class="header__top-content container">
            <div class="header__top-item">  
			<?php get_template_part( 'template-parts/content', 'social' ); ?>
            </div>
            <div class="header__top-item"> 
			<?php get_template_part( 'template-parts/content', 'title' ); ?>
            </div>
            <div class="header__top-item header__btn-item">
                <a target="_blank" rel="nofollow" class="header__btn btn-grey" href="https://t.me/<?php echo $websitesmaster['tg']; ?>"><i class="icon-telegram-plane"></i>Задать вопрос</a>
                <button aria-label="menu" class="header__burger"><i class="icon-bars"></i></button>
            </div>
        </div>
    </div>
    <div class="header__center-line">
        <div class="header__center-content container">
        <div class="header__center-logo">
		<?php get_template_part( 'template-parts/content', 'logo' ); ?>
        </div>
        <div class="header__center-menu-wrap">
            <nav class="header__menu-nav"> 
                <button aria-label="menu-close" class="header__menu-close"><i class="icon-plus"></i></button>
				<?php if( has_nav_menu('menu-primary') ) {
                        WebSitesMaster_menu_primary();
                    }?>
            </nav>
        </div>    
    </div>
</div>
</header>
    <div class="content-wrapper"> 
