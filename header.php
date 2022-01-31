<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thuandev
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e( 'Skip to content', 'thuandev' ); ?></a>

        <header id="masthead" class="site-header container-fluid">
            <div class="col-xl-5">
                <div class="header__nav-menu">
                    <label for="open__nav-menu" class="open__nav-menu--label"><i class="fas fa-bars"></i></label>
                    <input type="checkbox" class="open__nav-menu--checkbox" hidden id="open__nav-menu">
                    <nav id="site-navigation" class="main-navigation">
                        <button class="menu-toggle" aria-controls="primary-menu"
                            aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'thuandev' ); ?></button>
                        <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
                    </nav><!-- #site-navigation -->
                </div>
            </div>
            <div class="col-xl-2">
                <div class="site-branding">
                    <?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
                    <?php
			endif;
			$thuandev_description = get_bloginfo( 'description', 'display' );
			if ( $thuandev_description || is_customize_preview() ) :
				?>

                    <?php endif; ?>
                </div><!-- .site-branding -->
            </div>
            <div class="col-xl-5">
                <div class="header__nav-action">
                    <div class="header__nav-action--item ">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="header__nav-action--item header__nav-cart ">
                        <i class="fas fa-shopping-bag"></i>
                        <span class="header__nav-cart--qnt">0</span>
                    </div>
                    <div class="header__nav-action--item header__nav-user">
                        <img src="https://bobui.vn/assets/img/icon/login25.png" alt="" class="header__nav-action--img">
                        Đăng Nhập / Đăng ký
                    </div>
                </div>
            </div>
        </header><!-- #masthead -->