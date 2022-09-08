<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vigil
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css?<?php echo the_date('H:i:s');?>"/>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body <?php body_class(); ?> id="lang_<?php echo WPGlobus::Config()->language;?>">
<?php wp_body_open(); ?>
<div class="wrapper">
    <header>
        <div class="container">
            <div class="header_row">
                <div class="logo">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="main_menu">
                    <div class="mm_close"></div>
                    <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'lang_menu',
                            'container' => '',
                            'menu_class'  => 'lang_menu',
                        )
                    );
                    ?>
                    <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'main_menu',
                            'container' => '',
                            'menu_class'  => 'nav',

                        )
                    );
                    ?>
                    <?php get_search_form(); ?>
                </div>
                <div class="mm_btn">
                    <button class="hamburger"><span></span><span></span><span></span></button>
                </div>
            </div>
        </div>
    </header>
