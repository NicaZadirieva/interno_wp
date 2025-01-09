<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Interno_wp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
	<header>
        <div class="container">
            <div class="header">
                <a href="/" class="logo">
                    <img src="<?php echo get_site_url().'/logo' ?>" alt="Interno Logo" />
                </a>
                <nav>
                    <ul class="ul header__nav">
                        <?php wp_nav_menu(
                            array(
                               'theme_location'  => 'header__nav',
                               'menu_class' => "header__nav",
                               'container' => false,
                               
                            )
                        ); ?>
                        <li class="header__item">
                            <button class="header__search" onclick="openModal();">
                                <img src="<?php echo get_site_url().'/search-icon' ?>" alt="Search button" />
                            </button>
                        </li>
                    </ul>
                </nav>
                <button class="header__menu" onclick="openModalMenu();"></button>
            </div>
        </div>
    </header>
