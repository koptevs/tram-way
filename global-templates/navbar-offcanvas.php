<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = 'container';
//$container = get_theme_mod( 'ikunderstrap_container_type' );
?>

<nav id="main-nav" class="navbar navbar-expand-md" aria-labelledby="main-nav-label">

    <h2 id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e( 'Main Navigation', 'ikunderstrap' ); ?>
    </h2>


    <div class="<?php echo esc_attr( $container ); ?>">

        <!-- Your site title as branding in the menu -->
		<?php if ( ! has_custom_logo() ) { ?>
            <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
               itemprop="url">
	            <?php //echo get_template_directory_uri() . '/img/logo.svg'?><!--" alt="" width="30" height="24">-->
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                     class="bi bi-app-indicator" viewBox="0 0 16 16">
                    <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z"/>
                    <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                </svg>
                <span class="ms-1 navbar-test">
                <?php bloginfo( 'name' ); ?>
                </span>
            </a>
			<?php
		} else {
			the_custom_logo();
		}
		?>
        <!-- end custom logo -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNavOffcanvas"
                aria-controls="navbarNavOffcanvas" aria-expanded="false"
                aria-label="<?php esc_attr_e( 'Toggle navigation', 'ikunderstrap' ); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end " tabindex="-1" id="navbarNavOffcanvas">

            <div class="offcanvas-header justify-content-end">
                <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
            </div><!-- .offcancas-header -->

            <!-- The WordPress Menu goes here -->
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'offcanvas-body',
					'container_id'    => '',
					'menu_class'      => 'navbar-nav justify-content-end flex-grow-1 pe-3',
					'fallback_cb'     => '',
					'menu_id'         => 'main-menu',
					'depth'           => 3,
					'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				)
			);
			?>
        </div><!-- .offcanvas -->

    </div><!-- .container(-fluid) -->

</nav><!-- .site-navigation -->
