<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

    <header class="top-header">
        <div class="wrapper cf">
            <div class="header-third search-section menu-button cf">
                <div class="menu-icon">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <div class="search-box"><?php echo get_search_form(); ?></div>
            </div>
            <div class="header-third logo-section">
                <a href="<?php echo home_url("/");?>" class="logo-link">
                    <img src="<?php echo ale_get_option('sitelogo'); ?>" alt="">
                </a>
            </div>
            <div class="header-third social-section">
                <?php if (ale_get_option('vimeo')){ ?>
                    <a href="<?php echo ale_get_option('vimeo') ?>"><i class="fa fa-vimeo-square" aria-hidden="true"></i></a>
                <?php }?>
                <?php if (ale_get_option('insta')){?>
                    <a href="<?php echo ale_get_option('insta') ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <?php }?>
                <?php if (ale_get_option('twi')){?>
                    <a href="<?php echo ale_get_option('twi') ?>"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                <?php }?>
                <?php if (ale_get_option('fb')){?>
                    <a href="<?php echo ale_get_option('fb') ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <?php }?>
            </div>

            <nav class="top-navigation">
                <div class="wrapper">
                    <?php
                    if ( has_nav_menu( 'header_menu' ) ) {
                        wp_nav_menu(array(
                            'theme_location'=> 'header_menu',
                            'menu'			=> 'Header_menu Menu',
                            'menu_class'	=> 'headermenu cf',
                            'walker'		=> new Aletheme_Nav_Walker(),
                            'container'		=> '',
                        ));
                    }
                    ?>
                    <div class="donate-button">
                        <a href="<?php //echo ale_get_option('donate_link'); ?>"><?php _e('Donate', 'iglesia'); ?></a>
                    </div>
                </div>
            </nav>
    </header>

    <section class="home-slider">

    </section>

