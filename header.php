<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Polezen_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri();?>/assets/images/logo.png" type="image/x-icon">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <!-- header start -->
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__logo">
                    <a href="/" class="header__logo-link">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/logo.png" alt="Pole Zen" class="header__logo-img">
                    </a>
                </div>

                <div class="header__contact">
                    <div class="header__contact-social">
                        <a href="https://instagram.com/pole_zen_school?igshid=ODM2MWFjZDg=" target="_blank" class="header__contact-social_link">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets//images/instagram_icon.svg" alt="Instagram">
                        </a>
                        <a href="https://www.facebook.com/pole.zen.school?mibextid=ZbWKwL" target="_blank" class="header__contact-social_link">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets//images/facebook_icon.svg" alt="Facebook">
                        </a>
                        <a href="http://t.me/PoleZenChekIn_bot" target="_blank" class="header__contact-social_link">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets//images/telegram_icon.svg" alt="Telegram">
                        </a>
                    </div>
                    <div class="header__contact-phone">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/phone_icon.svg" alt="Phone">
                        <a href="tel:+ 38(063)3667909 ">
                            <span>+ 38 (063) 366 79 09 </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
